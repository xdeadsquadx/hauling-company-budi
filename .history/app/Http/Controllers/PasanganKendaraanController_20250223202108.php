<?php

namespace App\Http\Controllers;

use App\Models\pasanagan_kendaraan;
use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\pengemudi;

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

    $pengemudis = pengemudi::all(); 

        return view('operasional.pasanganKendaraan.indexPasangan',compact('kendaraans','pengemudis') );
    }

    public function update(Request $request, $id)
    {
    
        // Ambil kendaraan berdasarkan ID
    
    // Cari kendaraan berdasarkan ID
    $kendaraan = Kendaraan::findOrFail($id);

    // Update ID Pengemudi berdasarkan ID Kendaraan
    $kendaraan->update([
        'id_pengemudi' => $request->id_pengemudi,
    ]);
    var_dump($kendaraan);die;
    return redirect()->route('kendaraan.index')->with('success', 'Pengemudi berhasil diperbarui');
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
