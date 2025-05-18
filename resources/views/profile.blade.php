{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SIMAPAN - Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
        function toggleContent(id, button) {
            const content = document.getElementById(id);
            const icon = button.querySelector(".icon");
            content.classList.toggle("hidden");

            // Ubah ikon
            if (content.classList.contains("hidden")) {
                icon.textContent = ">"; // Panah ke kanan
            } else {
                icon.textContent = "v"; // Panah ke bawah
            }
        }
    </script>
</head>

<body class="bg-[#DBE7C9] font-poppins flex flex-col min-h-screen">
    <div class="flex-1">
        @include('components.navbar')

        {{-- CONTENT --}}
        <div class="max-w-3xl mx-auto space-y-4 py-10 min-h-[500px]">
            <!-- SEJARAH -->
            <div class="bg-[#294B2D] text-white rounded shadow mt-10">
                <button onclick="toggleContent('sejarah', this)"
                    class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                    <span class="icon">></span> SEJARAH ORGANISASI
                </button>
                <div id="sejarah"
                    class="bg-[#DBE7C9] text-[#294B29] px-6 py-4 hidden text-justify border border-green-900 rounded-b">
                    {!! $sejarah !!}
                </div>
            </div>

            <!-- VISI -->
            <div class="bg-[#294B2D] text-white rounded shadow">
                <button onclick="toggleContent('visi', this)"
                    class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                    <span class="icon">></span> VISI DAN MISI ORGANISASI
                </button>
                <div id="visi"
                    class="bg-[#DBE7C9] text-[#294B29] px-6 py-4 hidden text-justify border border-green-900 rounded-b">
                    {!! $visi !!}
                </div>
            </div>

            <!-- TUGAS -->
            <div class="bg-[#294B2D] text-white rounded shadow">
                <button onclick="toggleContent('tugas', this)"
                    class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                    <span class="icon">></span> TUGAS DAN FUNGSI ORGANISASI
                </button>
                <div id="tugas"
                    class="bg-[#DBE7C9] text-[#294B29] px-6 py-4 hidden text-justify border border-green-900 rounded-b">
                    {!! $tugas !!}
                </div>
            </div>

            <!-- STRUKTUR -->
            <div class="bg-[#294B2D] text-white rounded shadow">
                <button onclick="toggleContent('struktur', this)"
                    class="w-full text-left px-6 py-4 font-bold flex items-center gap-2">
                    <span class="icon">></span> STRUKTUR ORGANISASI
                </button>
                <div id="struktur"
                    class="bg-[#DBE7C9] text-[#294B29] px-6 py-4 hidden text-justify border border-green-900 rounded-b">
                    {!! $struktur !!}
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
