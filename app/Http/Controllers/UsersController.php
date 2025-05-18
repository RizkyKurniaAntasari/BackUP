<?php

namespace App\Http\Controllers;
use App\Models\KontenStaticPetugas;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // <=============================== [ P E N G U M U M A N] ===============================>
    public function pengumuman()
    {
        return view('users.pengumuman');
    }
    // <=============================== [ P E N Y U L U H A N] ===============================>
    public function penyuluhan()
    {
        return view('users.penyuluhan');
    }
    // <=============================== [ P R O F I L E ] ===============================>
    public function profile()
    {
        // Ambil konten per-tipe dari tabel konten_static_petugas
        $sejarah = KontenStaticPetugas::where('tipe', 'sejarah')->first()?->konten ?? '';
        $visi    = KontenStaticPetugas::where('tipe', 'visi')->first()?->konten ?? '';
        $tugas   = KontenStaticPetugas::where('tipe', 'tugas')->first()?->konten ?? '';
        $struktur= KontenStaticPetugas::where('tipe', 'struktur')->first()?->konten ?? '';

        // Kirim ke view profile
        return view('profile', compact('sejarah', 'visi', 'tugas', 'struktur'));
    }
    // <=============================== [ S T A T I S T I K] ===============================>
    public function statistik()
    {
            return view('statistik');
        
    }
}
