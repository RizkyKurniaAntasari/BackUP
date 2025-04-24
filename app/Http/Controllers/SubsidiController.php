<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Subsidi;

// class SubsidiController extends Controller
// {
//     public function index()
//     {
//         $subsidi = Subsidi::all();
//         return view('petugas.p_subsidi', compact('subsidi'));
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'username' => 'required',
//             'jenis' => 'required',
//             'tanggal' => 'required|date',
//             'status' => 'required|in:pending,disetujui,ditolak'
//         ]);

//         Subsidi::create($validated);
//         return redirect()->back()->with('success', 'Data subsidi berhasil ditambahkan!');
//     }
// }


namespace App\Http\Controllers;

use App\Models\Subsidi;
use Illuminate\Http\Request;

class SubsidiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter dari request
        $status = $request->input('status');
        $jenis = $request->input('jenis');
        $tanggal = $request->input('tanggal');

        // Bangun query untuk subsidi
        $subsidiQuery = Subsidi::query();

        if ($status) {
            $subsidiQuery->where('status', $status);
        }
        if ($jenis) {
            $subsidiQuery->where('jenis', $jenis);
        }
        if ($tanggal) {
            $subsidiQuery->whereDate('tanggal', $tanggal);
        }

        // Ambil data subsidi sesuai filter
        $subsidi = $subsidiQuery->get();

        return view('petugas.p_subsidi.index', compact('subsidi'));
    }
}

