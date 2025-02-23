<?php

namespace App\Http\Controllers;

use App\Models\kelas_pelatihan;
use App\Models\kelas_pengemudi;
use App\Models\pengemudi;
use Illuminate\Http\Request;

class KelasPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas_pelatihans = kelas_pelatihan::all();
        return view('pengemudi.indexPelatihan', compact('kelas_pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengemudis = Pengemudi::where('status', 0)->get();
        return view('pengemudi.pelatihan.createPelatihan', compact('pengemudis'));
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach($request->$id_kendaraan)
        kelas_pengemudi::create([
            'id_pengme'
        ]);
        kelas_pelatihan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas_pelatihan $kelas_pelatihan)
    {
        //
    }
}
