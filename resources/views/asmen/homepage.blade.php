<x-app-layout>
    <div class="flex items-start mt-10">
        <div class="ml-20 p-4">
            <p class="font-bold text-4xl text-secondary">Selamat datang</p>
            <p class="font-bold text-4xl text-secondary mt-2">{{ Auth::user()->name }}!</p>
            <p class="mt-5 text-xl text-primary">Sebagai Asisten Manajer</p>
        </div>        
        <img src="/storage/img/homepage asmen.png" class="w-2/5 ml-52">
    </div>
    <div>
        <p class="text-center font-semibold text-3xl mt-16">Apa yang bisa Asisten Manajer lakukan?</p>
    </div>
    <!-- Card container placed below the background image -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <!-- Row 1 -->
            <div class="flex justify-center space-x-16">
                <!-- Card 1 -->
                <div class="max-w-sm gradient-card-1 shadow-md rounded-3xl overflow-hidden w-80 flex flex-col justify-center items-center">
                    <div class="text-9xl text-primary font-semibold text-center">
                    </div>
                    <div class="mt-25 p-6">
                        <img src="/storage/img/icon rusak.png" class="mx-auto">
                        <p class="text-white text-2xl font-bold text-center mt-5">Kerusakan</p>
                        <p class="text-sm text-white mt-2">Anda dapat melakukan persetujuan terhadap laporan kerusakan yang masuk dan menyerahkannya kepada Manajer Bangunan.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="max-w-sm gradient-card-3 shadow-md rounded-3xl overflow-hidden w-80 flex flex-col justify-center items-center">
                    <div class="text-9xl text-primary font-semibold text-center">
                    </div>
                    <div class="mt-25 p-6">
                        <img src="/storage/img/icon tl.png" class="mx-auto">
                        <p class="text-white text-2xl font-bold text-center mt-5">Tindak Lanjut</p>
                        <p class="text-sm text-white mt-2">Anda dapat memantau data tindak lanjut yang diajukan oleh pekerja lapangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center my-12 mt-16">
        <p class="text-3xl font-medium text-primary">Mari Berkenalan dengan Tim Manajemen Kami!</p>
        <p class="text-sm mt-5 px-24">Kami dengan bangga memperkenalkan Manajer dan Asisten Manajer kami yang berdedikasi untuk memastikan keberhasilan operasional dan pemeliharaan bangunan serta stasiun.</p>
    </div>

    <div class="flex justify-center space-x-10  p-8">
    <!-- Card 1 -->
    <div class="max-w-xs gradient-card-3 shadow-md rounded-lg overflow-hidden relative">
    <img src="/storage/img/5.png" alt="Orang 2" class="w-3/4 mx-auto">
    <div class="bg-secondary text-center p-3 w-3/4 absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <p class="text-primary font-bold text-lg">Yuni Edi</p>
        <p class="text-white text-xs">Manajer Bangunan Dinas</p>
    </div>
</div>

        <div class="max-w-xs gradient-card-3 shadow-md rounded-lg overflow-hidden relative">
    <img src="/storage/img/3.png" alt="Orang 2" class="w-3/4 mx-auto">
    <div class="bg-secondary text-center p-3 w-3/4 absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <p class="text-primary font-bold text-lg">Handrawan N.</p>
        <p class="text-white text-xs">Asisten Manajer Stasiun</p>
    </div>
</div>


<div class="max-w-xs gradient-card-3 shadow-md rounded-lg overflow-hidden relative">
    <img src="/storage/img/4.png" alt="Orang 2" class="w-3/4 mx-auto">
    <div class="bg-secondary text-center p-3 w-3/4 absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <p class="text-primary font-bold text-lg">Wendy A.</p>
        <p class="text-white text-xs">Asisten Manajer Non Stasiun</p>
    </div>
</div>

<div class="max-w-xs gradient-card-3 shadow-md rounded-lg overflow-hidden relative">
    <img src="/storage/img/2.png" alt="Orang 2" class="w-3/4 mx-auto">
    <div class="bg-secondary text-center p-3 w-3/4 absolute bottom-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <p class="text-primary font-bold text-lg">Adi Purwanto</p>
        <p class="text-white text-xs">Asisten Manajer ME</p>
    </div>
</div>
    </div>

</x-app-layout>
