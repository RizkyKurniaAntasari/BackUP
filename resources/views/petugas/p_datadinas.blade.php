<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Agar fetch dapat membaca CSRF token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="flex bg-[#CBDAA9] font-poppins min-h-screen">

    {{-- Sidebar --}}
    @include('petugas.p_components.p_sidebar')

    {{-- Konten Utama --}}
    <main class="p-6 bg-[#CBDAA9] flex-1">
        {{-- Navbar --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">
                @if (Request::is('petugas/p_dashboard'))
                    BERANDA
                @elseif (Request::is('petugas/p_datadinas'))
                    DATA DINAS
                @elseif (Request::is('petugas/p_pengaduan'))
                    PENGADUAN
                @elseif (Request::is('petugas/p_subsidi'))
                    SUBSIDI
                @elseif (Request::is('petugas/p_update-harga'))
                    UPDATE HARGA
                @elseif (Request::is('petugas/p_informasiPertanian'))
                    INFORMASI PERTANIAN
                @elseif (Request::is('petugas/p_pengaturan'))
                    PENGATURAN
                @else
                    SIMAPAN
                @endif
            </h2>

            <div class="flex items-center space-x-6">
                {{-- Profil --}}
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

        {{-- Tabs --}}
        <div class="border-b-8 border-[#1B3219] my-0">
            <nav class="flex space-x-4">
                <button onclick="showTab('sejarah')" id="tab-sejarah"
                    class="text-white bg-[#1B3219] px-4 py-2 rounded-t-lg font-bold">
                    Sejarah
                </button>
                <button onclick="showTab('visi')" id="tab-visi"
                    class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline">
                    Visi dan Misi
                </button>
                <button onclick="showTab('tugas')" id="tab-tugas"
                    class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline">
                    Tugas dan Fungsi
                </button>
                <button onclick="showTab('struktur')" id="tab-struktur"
                    class="text-[#1B3219] px-4 py-2 font-bold rounded-t-lg hover:underline">
                    Struktur
                </button>
            </nav>
        </div>

        {{-- Area Konten (dinamis) --}}
        <div id="tab-content"
             class="bg-white border text-justify border-[#1B3219] rounded-sm p-4 space-y-3 shadow px-10 min-h-[200px]">
            <p class="text-center text-gray-500">Memuat konten...</p>
        </div>

        {{-- Tombol “Edit Konten” (hanya muncul setelah konten diload) --}}
        <div class="flex justify-end items-center text-[#1B3219] mt-4 space-x-1 text-base" id = "btn-edit">
            <img src="{{ asset('icon/edit.png') }}" alt="Edit" class="w-5 h-5">
            <span>Edit</span>
        </div>

        {{-- Form edit konten, disembunyikan sampai tombol “Edit” ditekan --}}
        <div id="edit-form" class="mt-6 bg-white p-4 border border-[#1B3219] rounded shadow hidden">
            <form id="form-konten">
                @csrf
                {{-- Input tersembunyi untuk tahu tipe konten apa yang sedang diedit --}}
                <input type="hidden" name="tipe" id="tipe" value="">

                <label class="block font-semibold mb-2 text-[#1B3219]">
                    Edit Konten: <span id="label-tipe" class="capitalize"></span>
                </label>
                <textarea name="konten" id="konten" rows="10"
                          class="w-full border border-[#1B3219] p-3 rounded text-sm"></textarea>

                <div class="flex justify-end mt-4 space-x-2">
                    <button type="button" id="btn-cancel"
                            class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
                        Batal
                    </button>
                    <button type="submit"
                            class="bg-[#1B3219] text-white px-6 py-2 rounded hover:bg-[#2c4c2a]">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </main>

    {{-- Script AJAX + Logika Tombol Edit --}}
    <script>
        // CSRF token agar bisa dipakai di fetch
        const csrfToken = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute('content');

        // Daftar tipe konten yang tersedia
        const tipeList = ['sejarah', 'visi', 'tugas', 'struktur'];

        // Elemen-elemen utama
        const tabContentDiv = document.getElementById('tab-content');
        const btnEdit      = document.getElementById('btn-edit');
        const editFormDiv  = document.getElementById('edit-form');
        const formKonten   = document.getElementById('form-konten');
        const textareaKonten = document.getElementById('konten');
        const inputTipe    = document.getElementById('tipe');
        const labelTipe    = document.getElementById('label-tipe');
        let currentTipe    = ''; // Akan menyimpan tipe tab saat ini

        /** 
         * Load konten dari server via AJAX (route p_datadinas.menulis).
         * Setelah data datang, tampilkan di area konten, 
         * atur currentTipe, dan munculkan tombol Edit. 
         */
        function loadKonten(tipe) {
            // Show indikator loading terlebih dahulu
            tabContentDiv.innerHTML = `<p class="text-center text-gray-500">Memuat konten...</p>`;
            // Sembunyikan form dan tombol Edit selagi mengambil data
            editFormDiv.classList.add('hidden');
            btnEdit.classList.add('hidden');

            currentTipe = tipe;
            // Atur label dan input tersembunyi untuk form
            labelTipe.innerText = tipe;
            inputTipe.value = tipe;

            // Panggil endpoint menulis (POST) dengan JSON { tipe: tipe }
            fetch("{{ route('p_datadinas.menulis') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ tipe: tipe })
            })
            .then(response => response.json())
            .then(data => {
                // Jika ada konten, tampilkan; kalau kosong, tunjukkan placeholder
                tabContentDiv.innerHTML = `
                    <div class="prose max-w-none">
                        ${data.konten || '<i>(Belum ada konten)</i>'}
                    </div>
                `;
                // Masukkan nilai konten ke textarea (tetap tersembunyi sampai klik Edit)
                textareaKonten.value = data.konten || '';
                // Munculkan tombol Edit sekarang
                btnEdit.classList.remove('hidden');
            })
            .catch(err => {
                tabContentDiv.innerHTML = `<p class="text-red-500">Gagal memuat konten.</p>`;
                console.error(err);
            });
        }

        /** 
         * Pindah ke tab tertentu:
         * - Ubah style tab (aktif/pasif).
         * - Panggil loadKonten(tipe).
         */
        function showTab(tabName) {
            // Reset style semua tab jadi pasif
            tipeList.forEach(id => {
                document.getElementById('tab-' + id)
                    .classList.remove('text-white', 'bg-[#1B3219]');
                document.getElementById('tab-' + id)
                    .classList.add('text-[#1B3219]');
            });
            // Aktifkan style tab yang dipilih
            document.getElementById('tab-' + tabName)
                .classList.add('text-white', 'bg-[#1B3219]');
            document.getElementById('tab-' + tabName)
                .classList.remove('text-[#1B3219]');

            // Load data konten untuk tipe tersebut
            loadKonten(tabName);
        }

        // Saat halaman pertama kali dimuat, set default ke “sejarah”
        document.addEventListener('DOMContentLoaded', function() {
            showTab('sejarah');
        });

        /** 
         * Saat tombol Edit diklik:
         * - Tampilkan form edit.
         * - Scroll ke form bila perlu.
         */
        btnEdit.addEventListener('click', function() {
            editFormDiv.classList.remove('hidden');
            // Scroll ke bawah untuk melihat form jika konten panjang
            editFormDiv.scrollIntoView({ behavior: 'smooth' });
        });

        /** 
         * Jika tombol “Batal” di dalam form diklik:
         * - Sembunyikan form kembali.
         */
        document.getElementById('btn-cancel').addEventListener('click', function() {
            editFormDiv.classList.add('hidden');
        });

        /** 
         * Saat form disubmit (klik “Simpan Perubahan”):
         * - Kirim AJAX ke route p_datadinas.memperbarui.
         * - Jika sukses, reload konten (tanpa menutup form atau menutupnya sesuai kebutuhan).
         */
        formKonten.addEventListener('submit', function(e) {
            e.preventDefault();

            const tipeVal   = inputTipe.value;
            const kontenVal = textareaKonten.value;

            fetch("{{ route('p_datadinas.memperbarui') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    tipe: tipeVal,
                    konten: kontenVal
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Setelah berhasil, reload konten terbaru
                    loadKonten(tipeVal);
                    // Optionally, sembunyikan form lagi:
                    editFormDiv.classList.add('hidden');
                    alert(data.message);
                } else {
                    alert('Gagal menyimpan konten.');
                }
            })
            .catch(err => {
                console.error(err);
                alert('Terjadi kesalahan saat menyimpan.');
            });
        });
    </script>
</body>

</html>
