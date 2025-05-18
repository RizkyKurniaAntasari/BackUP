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
            @foreach ($artikels as $artikel)
                <div class="flex space-x-4 border-b pb-3">
                    <img src="{{ asset('img_artikel/' . $artikel->gambar) }}" class="rounded w-20 h-20 object-cover" />
                    <div>
                        <p class="text-xs text-gray-500">
                            {{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}</p>
                        <p class="font-semibold text-sm text-[#294B29]">
                            <a href="{{ route('artikel.show', ['id' => $artikel->id]) }}">
                                {{ $artikel->judul }}
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
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
