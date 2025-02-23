<?php

namespace App\Http\Controllers;

use App\Models\maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.listKendaraan', compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('kendaraan.createKendaraan');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Kendaraan::create([
            'merek' => $request->merek,
            'jenis' => $request->jenis,
            'plat_kendaraan' => $request->plat_kendaraan,
        ]);
    

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maintenance $maintenance)
    {
        //
    }
}
