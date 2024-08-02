<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Kerusakan;

class KerusakanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $kerusakan = Kerusakan::query()
            ->where(function($query) use ($search) {
                $query->where('nama_pelapor', 'LIKE', "%{$search}%")
                      ->orWhere('tanggal', 'LIKE', "%{$search}%")
                      ->orWhere('sumber_laporan', 'LIKE', "%{$search}%")
                      ->orWhere('lokasi', 'LIKE', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('manajer.kerusakan', compact('kerusakan'));
    }

    public function show($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->foto_kerusakan = explode(',', $kerusakan->foto_kerusakan);
        return view('manajer.kerusakan_show', compact('kerusakan'));
    }
    public function destroy($id_kerusakan)
    {
        $kerusakan = Kerusakan::findOrFail($id_kerusakan);
    
        // Menghapus setiap foto yang terkait
        foreach (explode(',', $kerusakan->foto_kerusakan) as $foto) {
            $path = storage_path('app/public/' . $foto);
            if (file_exists($path)) {
                unlink($path); // Menghapus file dari filesystem
            }
        }
    
        // Menghapus data dari database
        $kerusakan->delete();
    
        return redirect()->route('kerusakan.index')->with('success', 'Data kerusakan berhasil dihapus');
    }

    public function approveByAsisten(Request $request, $id_kerusakan)
{
    $kerusakan = Kerusakan::findOrFail($id_kerusakan);

    if ($kerusakan->status === 'sedang diproses') {
        $kerusakan->status = 'disetujui_asisten';
        $kerusakan->personel = $request->personel;
        $kerusakan->tgl_perbaikan = $request->tgl_perbaikan;
        $kerusakan->save();
        return redirect()->route('kerusakan.asisten_manajer', $kerusakan->id_kerusakan);    }
}


    public function approveByManajer($id_kerusakan)
{
    $kerusakan = Kerusakan::findOrFail($id_kerusakan);

    if ($kerusakan->status === 'disetujui_asisten') {
        // Update status hanya jika status saat ini adalah 'approved_asisten'
        $kerusakan->status = 'disetujui';
        $kerusakan->save();
        return redirect()->route('kerusakan', $kerusakan->id_kerusakan);    }
}
    public function rejectByAsisten($id_kerusakan)
    {
        $kerusakan = Kerusakan::findOrFail($id_kerusakan);

        if ($kerusakan->status === 'sedang diproses') {
            $kerusakan->status = 'ditolak_asisten';
            $kerusakan->save();
            return redirect()->route('kerusakan.asisten_manajer', $kerusakan->id_kerusakan);    
        }
    }

    public function rejectByManajer($id_kerusakan)
    {
        $kerusakan = Kerusakan::findOrFail($id_kerusakan);

        if ($kerusakan->status === 'ditolak_asisten') {
            $kerusakan->status = 'ditolak';
            $kerusakan->save();
            return redirect()->route('kerusakan', $kerusakan->id_kerusakan);    
        }

    }
}
