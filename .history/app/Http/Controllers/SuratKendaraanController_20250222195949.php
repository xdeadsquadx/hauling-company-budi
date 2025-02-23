<?php

namespace App\Http\Controllers;

use App\Models\surat_kendaraan;
use Illuminate\Http\Request;

class SuratKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surats = surat_kendaraan::all();
        return view('kendaraan.surat.indexSurat', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = Kendara::all();
        return view('kendaraan.surat.createSurat');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        surat_kendaraan::create($request->all());

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
