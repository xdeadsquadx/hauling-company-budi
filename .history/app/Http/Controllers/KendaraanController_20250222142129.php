<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kendaraan.listKendaraan');
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
    public function show(kendaraan $kendaraan)
    {
        $kendaraan = Order::all();
        return view('admin.pengiriman.index', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kendaraan $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kendaraan $kendaraan)
    {
        //
    }
}
