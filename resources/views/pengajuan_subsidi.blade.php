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
        <h1 class="text-center text-2xl font-bold text-green-900 mb-8">Pengajuan Subsidi</h1>
        <form action="" method="" class="space-y-6" autocomplete="off">
            <!-- NAMA -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="nama" class="font-semibold text-green-900 col-span-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda" required
                class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>
            
            <!-- ALAMAT -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="alamat" class="font-semibold text-green-900 col-span-1">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>

            <!-- NIK -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="NIK" class="font-semibold text-green-900 col-span-1">NIK</label>
                <input type="NIK" id="NIK" name="NIK" placeholder="Nomor Induk Kependudukan" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
            </div>

            <!-- JENIS PUPUK -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="Jenis_Subsidi" class="font-semibold text-green-900 col-span-1">Jenis Subsidi</label>

                <select id="Jenis_Subsidi" name="Jenis_Subsidi" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white focus:outline-none">
                    <option value="" disabled selected>Pilih Jenis Subsidi</option>
                    <option value="pupuk">Pupuk</option>
                    <option value="benih">Benih</option>
                    <option value="alat">Alat Pertanian</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Jenis Pupuk -->
            <div class="grid grid-cols-4 gap-4 items-center">
                <label for="Jenis_Pupuk" class="font-semibold text-green-900 col-span-1">Jenis Pupuk</label>

                <select id="Jenis_Pupuk" name="Jenis_Pupuk" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white focus:outline-none">
                    <option value="" disabled selected>Pilih Jenis Pupuk</option>
                    <option value="urea">Urea</option>
                    <option value="za">ZA</option>
                    <option value="sp36">SP-36</option>
                    <option value="npk">NPK</option>
                    <option value="organik">Organik</option>
                </select>
            </div>

            <!-- Volume Pupuk -->
            <div class="grid grid-cols-4 gap-4 items-center mt-4">
                <label for="Volume_Pupuk" class="font-semibold text-green-900 col-span-1">Volume Pupuk</label>

                <input type="number" id="Volume_Pupuk" name="Volume_Pupuk" placeholder="Masukkan volume (kg/liter)" required
                    class="col-span-3 p-3 rounded bg-[#294B29] opacity-50 text-white placeholder-white focus:outline-none">
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