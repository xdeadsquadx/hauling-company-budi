<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\surat_kendaraan;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\DB;
class SuratKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $surats = DB::table('surat_kendaraans')
    ->join('kendaraans', 'surat_kendaraans.id_kendaraan', '=', 'kendaraans.id_kendaraan')
    ->get();
        return view('kendaraan.surat.indexSurat', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = kendaraan::all();
        return view('kendaraan.surat.createSurat', compact('kendaraans'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $periode = Carbon::parse($request->tanggal_terbit)->diffInDays(Carbon::parse($request->tanggal_expired));


        // Simpan data ke database
        Surat_kendaraan::create([
            'id_kendaraan' => $request->id_kendaraan,
            'jenis_surat' => $request->jenis_surat,
            'periode' => $periode, // Simpan periode yang udah dihitung
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_expired' => $request->tanggal_expired,
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(surat_kendaraan $surat_kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(surat_kendaraan $surat_kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, surat_kendaraan $surat_kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(surat_kendaraan $surat_kendaraan)
    {
        //
    }
}
