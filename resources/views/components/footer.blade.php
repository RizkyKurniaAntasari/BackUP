<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

{{-- <footer class="bg-[#294B2D] text-white px-6 py-6">
    <div class="flex flex-col md:flex-row justify-between text-sm">
        <div class="mb-4 md:mb-0">
            <img src="\img\logo-simapan.png" class="w-32 mb-2" alt="SIMAPAN Logo">
            <p>Sistem Informasi Manajemen Pertanian Kabupaten Lampung Barat</p>
            <p class="mt-2 text-xs">© Copyright 2025. Kelompok Lincari - Jurusan Ilmu Komputer, Universitas Lampung</p>
        </div>
        <div>
            <p>Kantor Dinas Pertanian Kab. Lambar</p>
            <p>Jl. Raden Intan, Way Mengaku, Komp. Perkantoran Pemkab Lampung Barat, Liwa, Lampung, 34842</p>
            <p>📞 Telp: 1234-5678-910</p>
            <p>📱 WhatsApp: 0812-3456-7890</p>
            <p>📧 Email: dinaspertanianlambar@gmail.com</p>
        </div>
    </div>
</footer> --}}

<footer class="bg-[#294B2D] text-white px-24 py-8">
    <div class="flex flex-col md:flex-row justify-around text-sm">
        <div class="mb-4 md:mb-0">
            <img src="{{ asset('icon/logo_simapan_lengkap2.png') }}" class="h-20 md:h-24 object-contain" alt="SIMAPAN Logo">

            <p class="mt-2 text-xs px-12 text-[#DBE7C9]">© Copyright 2025. Kelompok Lincari - Jurusan Ilmu Komputer, Universitas Lampung</p>
        </div>
        <div class="text-s text-[#DBE7C9]">
            <p class="font-semibold">Kantor Dinas Pertanian Kab. Lambar</p>
            <p class="opacity-95">Jl. Raden Intan, Way Mengaku, Komp. Perkantoran <br> Pemkab Lampung Barat, Liwa, Lampung, 34842</p>
            <table class="mt-2 border-spacing-x-2 border-separate" >
                <tr>
                    <td><img src="{{asset('icon/telepon_putih.png')}}" class="w-5 h-5 md:w-7 md:h-7 object-contain" alt="telepon logo"></td>
                    <td class="opacity-95 mt-2">Telp: 1234-5678-910</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('icon/whatsapp_putih.png') }}" class="w-5 h-5 md:w-7 md:h-7 object-contain" alt="telepon logo"></td>
                    <td class="opacity-95">WhatsApp: 0812-3456-7890</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('icon/email_putih.png') }}" class="w-5 h-5 md:w-7 md:h-7 object-contain" alt="telepon logo"></td>
                    <td class="opacity-95">Email: dinaspertanianlambar@gmail.com</td>
                </tr>
            </table>
        </div>
    </div>
</footer>