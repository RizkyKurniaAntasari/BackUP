<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsidi;

class SubsidiController extends Controller
{
    public function index()
    {
        $subsidi = Subsidi::all();
        return view('pengajuan_subsidi', compact('subsidi'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'nik' => 'required|numeric|digits:16',
            'jenis_subsidi' => 'required|string',
            'jenis_pupuk' => 'required|string',
            'volume_pupuk' => 'required|numeric|min:1'
        ]);

        Subsidi::create($validated);

        return redirect()->back()->with('success', 'Pengajuan subsidi berhasil dikirim!');
    }
}