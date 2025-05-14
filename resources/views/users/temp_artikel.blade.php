@extends('users.app')

@section('title', 'Artikel - ' . $artikel->judul)

@section('content')
    <!-- ARTIKEL -->
    <main class="relative flex-1 bg-[#DBE7C9] rounded-lg p-4 space-y-4">

        <!-- Tombol Kembali di pojok kiri -->
        <div class="absolute left-4 top-4">
            <a href="{{ route('users.artikel') }}" class="text-green-900 font-semibold">
                <span class="text-5xl md:text-4xl">&larr;</span>
            </a>
        </div>

        <!-- Judul Artikel -->
        <div class="text-center pt-4">
            <h1 class="text-2xl md:text-3xl font-semibold text-green-900 leading-snug break-words max-w-2xl mx-auto">
                {{ $artikel->judul }}
            </h1>
            <p class="text-sm text-gray-600 mt-2">Oleh: {{ $artikel->penulis }}</p>
        </div>

        <!-- Gambar Artikel -->
        <img src="{{ asset('img_artikel/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}"
            class="rounded-lg shadow-md mx-auto w-2/3">

        <!-- Isi Paragraf -->
        <p class="ml-20 text-justify mt-6 text-[16px] text-gray-800 leading-relaxed">
            {{ $artikel->deskripsi }}
        </p>
    </main>
@endsection