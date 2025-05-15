<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Artikel</title>
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
                <img src="https://i.pravatar.cc/40" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">23 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        <!-- Link ke halaman artikel dengan parameter id -->
                        <a href="{{ route('artikel.show', ['id' => 1]) }}">Tren Kopi Spesialti: Meningkatnya Minat
                            Konsumen terhadap Kopi Berkualitas Tinggi</a>
                    </p>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://i.pravatar.cc/30" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">20 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        <a href="{{ route('artikel.show', ['id' => 2]) }}">
                            Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran
                        </a>
                    </p>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?drone" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">19 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas
                    </p>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?agriculture" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">17 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Inovasi Sistem Irigasi Tetes untuk Tanaman Hortikultura di Musim Kemarau
                    </p>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?soil" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">15 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Analisis Kualitas Tanah Menggunakan Sensor IoT: Langkah Awal Pertanian Presisi
                    </p>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?farmer" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">13 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Petani Milenial: Mengubah Wajah Pertanian Indonesia dengan Teknologi Digital
                    </p>
                </div>
            </div>

            <!-- Artikel 7 -->
            <div class="flex space-x-4 border-b pb-3">
                <img src="https://source.unsplash.com/80x80/?plant" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">10 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Urban Farming di Lahan Sempit: Solusi Ketahanan Pangan Keluarga Perkotaan
                    </p>
                </div>
            </div>

            <!-- Artikel 8 -->
            <div class="flex space-x-4">
                <img src="https://source.unsplash.com/80x80/?weather" class="rounded w-20 h-20 object-cover" />
                <div>
                    <p class="text-xs text-gray-500">8 Maret 2025</p>
                    <p class="font-semibold text-sm text-gray-800">
                        Prediksi Cuaca dan Perubahan Iklim: Tantangan Baru bagi Petani Modern
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
