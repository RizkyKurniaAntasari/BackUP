<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- HEADER ATAS -->
<header class="bg-[#D6E6C5] px-8 py-2 flex items-center justify-between font-poppins">
    <!-- Kiri: Logo + Nama -->
    <div class="flex items-center space-x-4">
        <img src="{{ asset('icon/logo_simapan_navbar.png') }}" class="w-72 md:w-[500px] object-contain" />
    </div>

    <!-- Kanan: Sosmed + Signin/Auth + Toggle Menu -->
    <div class="flex items-center space-x-3">
        <!-- Sosmed -->
        <div class="hidden md:flex space-x-3 text-[#143D1E] text-xl">
            <img src="{{ asset('icon/instagram.png') }}" class="w-5 md:w-6">
            <img src="{{ asset('icon/facebook.png') }}" class="w-5 md:w-6">
            <img src="{{ asset('icon/youtube.png') }}" class="w-5 md:w-8">
            <img src="{{ asset('icon/x.png') }}" class="w-5 md:w-6">
            <img src="{{ asset('icon/tiktok.png') }}" class="w-5 md:w-6">
        </div>

        <!-- Sign In atau Avatar -->
        @guest
            <a href="{{ route('login') }}"
                class="bg-[#143D1E] text-white px-3 py-1 rounded-full text-xs md:text-sm hover:bg-green-900">
                Sign in
            </a>
        @endguest

        @auth
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" alt="Avatar"
                class="w-8 h-8 md:w-9 md:h-9 rounded-full object-cover border-2 border-white hover:border-yellow-400 transition duration-300">
        @endauth

        <!-- Hamburger Menu (Mobile) -->
        <button id="toggleBtn" class="md:hidden text-[#143D1E] focus:outline-none text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<!-- NAVBAR MENU -->
<nav class="bg-[#294B2D] text-white font-poppins">
    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-10 text-sm font-medium justify-center px-6 py-4">
        <li><a href="{{ route('dashboard') }}" class="hover:text-yellow-500 m-2 font-bold">BERANDA</a></li>
        <li><a href="{{ route('profile') }}" class="hover:text-yellow-400 m-2 font-bold">PROFIL</a></li>
        <li><a href="{{ route('statistik') }}" class="hover:text-yellow-400 m-2 font-bold">STATISTIK</a></li>
        <li><a href="{{ route('users.artikel') }}" class="hover:text-yellow-400 m-2 font-bold">ARTIKEL</a></li>
        <li><a href="{{ route('users.pengumuman') }}" class="hover:text-yellow-400 m-2 font-bold">PENGUMUMAN</a></li>
        <li><a href="{{ route('users.penyuluhan') }}" class="hover:text-yellow-400 m-2 font-bold">PENYULUHAN</a></li>
        <li><a href="{{ route('pengaduan') }}" class="hover:text-yellow-400 m-2 font-bold">PENGADUAN</a></li>
        <li><a href="{{ route('pengajuan_subsidi') }}" class="hover:text-yellow-400 m-2 font-bold">SUBSIDI</a></li>
    </ul>

    <!-- Mobile Menu (Toggle) -->
    <ul id="mobileMenu" class="md:hidden hidden flex-col space-y-2 px-6 py-4 text-sm font-medium">
        <li><a href="{{ route('dashboard') }}" class="block hover:text-yellow-500 font-bold">BERANDA</a></li>
        <li><a href="{{ route('profile') }}" class="block hover:text-yellow-500 font-bold">PROFIL</a></li>
        <li><a href="{{ route('statistik') }}" class="block hover:text-yellow-500 font-bold">STATISTIK</a></li>
        <li><a href="{{ route('users.artikel') }}" class="block hover:text-yellow-500 font-bold">ARTIKEL</a></li>
        <li><a href="{{ route('users.pengumuman') }}" class="block hover:text-yellow-500 font-bold">PENGUMUMAN</a></li>
        <li><a href="{{ route('users.penyuluhan') }}" class="block hover:text-yellow-500 font-bold">PENYULUHAN</a></li>
        <li><a href="{{ route('pengaduan') }}" class="block hover:text-yellow-500 font-bold">PENGADUAN</a></li>
        <li><a href="{{ route('pengajuan_subsidi') }}" class="block hover:text-yellow-500 font-bold">SUBSIDI</a></li>
    </ul>
</nav>

<!-- Script toggle menu -->
<script>
    const toggleBtn = document.getElementById('toggleBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
