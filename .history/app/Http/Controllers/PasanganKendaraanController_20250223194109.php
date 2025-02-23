<?php

namespace App\Http\Controllers;

use App\Models\pasanagan_kendaraan;
use Illuminate\Http\Request;
use App\Models\kendaraan;
class PasanganKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::leftJoin('pengemudis', 'kendaraans.id_pengemudi', '=', 'pengemudis.id_pengemudi')
    ->select('kendaraans.*', 'pengemudis.nama as nama_pengemudi')
    ->get();

        return view('operasional.pasanganKendaraan.indexPasangan',compact('kendaraans') );
    }
    public function update(Request $request, Kendaraan $kendaraan)
{
    $request->validate([
        'nama_pengemudi' => 'required|string|max:255',
    ]);

    // Pastikan kendaraan punya pengemudi
    if ($kendaraan->pengemudi) {
        $kendaraan->pengemudi->update([
            'nama' => $request->nama_pengemudi,
        ]);
    }

    return redirect()->route('kendaraan.index')->with('success', 'Nama pengemudi berhasil diperbarui');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */



}
