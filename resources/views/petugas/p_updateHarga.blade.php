<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Harga</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">
    <!-- Sidebar -->
    @include('petugas.p_components.p_sidebar')

    <!-- Main Content -->
    <main class="p-6 bg-[#CBDAA9] flex-1">
        <!-- Navbar -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">
                UPDATE HARGA
            </h2>

            <div class="flex items-center space-x-6">
                <!-- Profil -->
                <div class="flex items-center space-x-2">
                    <img src="https://i.pravatar.cc/40" alt="user" class="rounded-full w-10 h-10">
                    <div>
                        <p class="text-sm font-bold">Nadya Arsa</p>
                        <p class="text-xs text-gray-600">Petugas</p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- Tabs -->
        <div class="border-b-8 border-[#1B3219] my-0">
            <nav class="flex space-x-4">
                <button onclick="changeTab('kopi')" id="tab-kopi" class="text-white bg-[#1B3219] px-4 py-2 rounded-t-lg font-bold">Kopi</button>
                <button onclick="changeTab('sayuran')" id="tab-sayuran" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline">Sayuran</button>
                <button onclick="changeTab('lada')" id="tab-lada" class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline">Lada</button>
            </nav>
        </div>

        <!-- Konten Tab Kopi -->
        <div id="content-kopi" class="tab-content">
            <div class="bg-white border border-[#1B3219] rounded-sm p-4 shadow">
                <table class="w-full text-sm text-left text-black">
                    <thead class="bg-[#1B3219] text-white">
                        <tr>
                            <th class="px-6 py-3">Hari</th>
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Harga (Kg)</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @php
                            $days = ['Kamis', 'Rabu', 'Selasa', 'Senin', 'Minggu', 'Sabtu', 'Jumat', 'Kamis', 'Rabu', 'Selasa'];
                            $dates = [
                                '03-04-2025', '02-04-2025', '01-04-2025', '31-03-2025', '30-03-2025',
                                '29-03-2025', '28-03-2025', '27-03-2025', '26-03-2025', '25-03-2025'
                            ];
                            $kopiPrices = [64000, 63500, 63000, 62500, 62000, 61500, 61000, 60500, 60000, 59500];
                        @endphp

                        @foreach($days as $index => $day)
                        <tr>
                            <td class="px-6 py-4">{{ $day }}</td>
                            <td class="px-6 py-4">{{ $dates[$index] }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($kopiPrices[$index], 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-[#1B3219] flex items-center space-x-1 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                    </svg>
                                    <span>Edit</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Konten Tab Sayuran -->
        <div id="content-sayuran" class="tab-content hidden">
            <div class="bg-white border border-[#1B3219] rounded-sm p-4 shadow">
                <table class="w-full text-sm text-left text-black">
                    <thead class="bg-[#1B3219] text-white">
                        <tr>
                            <th class="px-6 py-3">Hari</th>
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Harga (per Kg)</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @php
                            $sayuranPrices = [15000, 14500, 14000, 13500, 13000, 12500, 12000, 11500, 11000, 10500];
                        @endphp

                        @foreach($days as $index => $day)
                        <tr>
                            <td class="px-6 py-4">{{ $day }}</td>
                            <td class="px-6 py-4">{{ $dates[$index] }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($sayuranPrices[$index], 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-[#1B3219] flex items-center space-x-1 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                    </svg>
                                    <span>Edit</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Konten Tab Lada -->
        <div id="content-lada" class="tab-content hidden">
            <div class="bg-white border border-[#1B3219] rounded-sm p-4 shadow">
                <table class="w-full text-sm text-left text-black">
                    <thead class="bg-[#1B3219] text-white">
                        <tr>
                            <th class="px-6 py-3">Hari</th>
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Harga (Kg)</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @php
                            $ladaPrices = [85000, 84500, 84000, 83500, 83000, 82500, 82000, 81500, 81000, 80500];
                        @endphp

                        @foreach($days as $index => $day)
                        <tr>
                            <td class="px-6 py-4">{{ $day }}</td>
                            <td class="px-6 py-4">{{ $dates[$index] }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($ladaPrices[$index], 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-[#1B3219] flex items-center space-x-1 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M5 19h14v2H5zM18.7 6.3l-1-1c-.4-.4-1-.4-1.4 0l-1.8 1.8 2.4 2.4 1.8-1.8c.4-.4.4-1 0-1.4zM16.6 9.4l-2.4-2.4L6 15v2.4h2.4l8.2-8.2z"/>
                                    </svg>
                                    <span>Edit</span>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tombol Tambah (+) -->
        <div class="flex justify-end items-center text-[#1B3219] mt-4 space-x-1 text-base">
            <a href="{{-- {{ route('tambah-harga') }} --}}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z"/>
                </svg>
                <span>Tambah Harga</span>
            </a>
        </div>
    </main>

    <script>
        function changeTab(tabName) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Tampilkan konten tab yang dipilih
            document.getElementById(`content-${tabName}`).classList.remove('hidden');
            
            // Reset semua style tab
            document.querySelectorAll('nav button').forEach(tab => {
                tab.classList.remove('text-white', 'bg-[#1B3219]');
                tab.classList.add('text-[#1B3219]');
            });
            
            // Style untuk tab aktif
            const activeTab = document.getElementById(`tab-${tabName}`);
            activeTab.classList.remove('text-[#1B3219]');
            activeTab.classList.add('text-white', 'bg-[#1B3219]');
        }

        // Set tab Kopi sebagai default saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            changeTab('kopi');
        });
    </script>
</body>
</html>