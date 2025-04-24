<!-- resources/views/pengaduan.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pengajuan Subsidi</title>
    <script src="js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#DBE7C9] font-poppins">
    @include('components.navbar')
    <div class=" bg-[#DBE7C9] p-10 rounded min-h-screen items-center justify-center">
        <h1 class="text-center text-2xl font-bold text-green-900 mb-8">PENGAJUAN SUBSIDI</h1>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pengajuan_subsidi.store') }}" method="POST" class="space-y-6" autocomplete="off">
            @csrf

            <!-- NAMA -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="nama" class="font-bold text-green-900 col-span-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <!-- ALAMAT -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="alamat" class="font-bold text-green-900 col-span-1">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('alamat') }}">
                @error('alamat')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <!-- NIK -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="nik" class="font-bold text-green-900 col-span-1">NIK</label>
                <input type="text" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('nik') }}">
                @error('nik')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <!-- JENIS SUBSIDI -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="jenis_subsidi" class="font-bold text-green-900 col-span-1">Jenis Subsidi</label>
                <select id="jenis_subsidi" name="jenis_subsidi" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white focus:outline-none">
                    <option value="" disabled {{ old('jenis_subsidi') ? '' : 'selected' }}>Pilih Jenis Subsidi
                    </option>
                    <option value="pupuk" {{ old('jenis_subsidi') == 'pupuk' ? 'selected' : '' }}>Pupuk</option>
                    <option value="benih" {{ old('jenis_subsidi') == 'benih' ? 'selected' : '' }}>Benih</option>
                    <option value="alat" {{ old('jenis_subsidi') == 'alat' ? 'selected' : '' }}>Alat Pertanian
                    </option>
                    <option value="lainnya" {{ old('jenis_subsidi') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('jenis_subsidi')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <!-- JENIS PUPUK -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="jenis_pupuk" class="font-bold text-green-900 col-span-1">Jenis Pupuk</label>
                <select id="jenis_pupuk" name="jenis_pupuk" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white focus:outline-none">
                    <option value="" disabled {{ old('jenis_pupuk') ? '' : 'selected' }}>Pilih Jenis Pupuk
                    </option>
                    <option value="urea" {{ old('jenis_pupuk') == 'urea' ? 'selected' : '' }}>Urea</option>
                    <option value="za" {{ old('jenis_pupuk') == 'za' ? 'selected' : '' }}>ZA</option>
                    <option value="sp36" {{ old('jenis_pupuk') == 'sp36' ? 'selected' : '' }}>SP-36</option>
                    <option value="npk" {{ old('jenis_pupuk') == 'npk' ? 'selected' : '' }}>NPK</option>
                    <option value="organik" {{ old('jenis_pupuk') == 'organik' ? 'selected' : '' }}>Organik</option>
                </select>
                @error('jenis_pupuk')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <!-- VOLUME PUPUK -->
            <div class="grid grid-cols-4 gap-4 items-center mt-4">
                <label for="volume_pupuk" class="font-bold text-green-900 col-span-1">Volume Pupuk</label>
                <input type="number" id="volume_pupuk" name="volume_pupuk" placeholder="Masukkan volume (kg/liter)"
                    required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none"
                    value="{{ old('volume_pupuk') }}">
                @error('volume_pupuk')
                    <p class="text-red-500 text-sm col-span-4">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" class="bg-green-900 text-white px-6 py-2 rounded hover:bg-green-800 transition">
                    KIRIM
                </button>
            </div>
        </form>

    </div>
    @include('components.footer')
</body>

</html>
