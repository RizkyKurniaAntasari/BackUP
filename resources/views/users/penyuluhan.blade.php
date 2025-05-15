<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Penyuluhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#294B29] font-poppins">

    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- MAIN CONTENT -->
    <div class="flex px-6 py-8 space-x-8">

        <!-- FILTER -->
        <aside class="w-64 bg-[#294B29] text-white rounded-lg p-4 text-sm space-y-6">
            <div>
                <p class="font-semibold mb-2">FILTER</p>

                <!-- Jenis Artikel -->
                <div>
                    <button onclick="toggleContent('jenisArtikel')"
                        class="flex items-center justify-between w-full mb-2">
                        <span>JENIS ARTIKEL</span>
                        <span class="icon">▼</span>
                    </button>
                    <div id="jenisArtikel" class="space-y-1 ml-2">
                        <label class="block"><input type="checkbox" class="mr-2">Perkebunan</label>
                        <label class="block"><input type="checkbox" class="mr-2">Pertanian</label>
                    </div>
                </div>

                <!-- Waktu Publish -->
                <div>
                    <button onclick="toggleContent('waktuPublish')"
                        class="flex items-center justify-between w-full mt-4 mb-2">
                        <span>WAKTU PUBLISH</span>
                        <span class="icon">▼</span>
                    </button>
                    <div id="waktuPublish" class="space-y-1 ml-2">
                        <label class="block"><input type="checkbox" class="mr-2">1 minggu terakhir</label>
                        <label class="block"><input type="checkbox" class="mr-2" checked>1 bulan terakhir</label>
                        <label class="block"><input type="checkbox" class="mr-2">3 bulan terakhir</label>
                    </div>
                </div>
            </div>
        </aside>

        <!-- ARTIKEL -->
        <main class="flex-1 bg-[#DBE7C9] rounded-lg p-4 space-y-4">

            <!-- Artikel 1 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?coffee" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">23 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        <!-- Link ke halaman artikel dengan parameter id -->

                        {{-- 
                            DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA
                            DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA DIPERLUKAN DATA 
                        --}}

                        <a href="{{ route('artikel.show', ['id' => 1]) }}">Cara Mengatasi Serangan Tungau pada Tanaman Tomat dan Paprika</a>
                    </p>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?vegetable" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">20 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        <a href="{{ route('artikel.show', ['id' => 1]) }}">Strategi Pencegahan Penyakit Layu Bakteri pada Tanaman Cabai</a>
                    </p>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?drone" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">19 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Deteksi Dini Serangan Hama pada Tanaman Padi dan Solusinya
                    </p>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?agriculture" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">17 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Strategi Meningkatkan Hasil Panen Sayuran dengan Teknik Organik
                    </p>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?soil" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">15 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Optimasi Pola Tanam untuk Meningkatkan Produktivitas Padi
                    </p>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?farmer" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">13 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Manajemen Penyakit Tanaman Kopi: Dari Pencegahan hingga Penanganan
                    </p>
                </div>
            </div>

            <!-- Artikel 7 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?plant" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">10 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Strategi Pengendalian Hama Terpadu (PHT) untuk Meningkatkan Hasil Pertanian
                    </p>
                </div>
            </div>

        </main>
    </div>

    <!-- FOOTER -->
    @include('components.footer')

    <!-- SCRIPT UNTUK FILTER TOGGLE -->
    <script>
        function toggleContent(id) {
            const element = document.getElementById(id);
            if (element.style.display === "none") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
    </script>

</body>
</html>