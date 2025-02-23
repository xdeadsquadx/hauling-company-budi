<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kendaraan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = jadwal::join('kendaraans', 'kendaraans.id_kendaraan','jadwals.id_kendaraan')
        ->join('pengemudis', 'pengemudis.id_pengemudi','kendaraans.id_pengemudi')
        ->where('tanggal', '=', Carbon::today())->get();
        return view('operasional.jadwalHauling.indexJadwal', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = kendaraan::where('status', '=', )
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
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        //
    }
}
