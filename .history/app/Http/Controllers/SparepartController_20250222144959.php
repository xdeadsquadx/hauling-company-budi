<?php

namespace App\Http\Controllers;

use App\Models\sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spareparts = sparepart::all();
        return view('kendaraan.sparepart.indexSparepart', compact('spareparts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.sparepart.createSparepart');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {

            sparepart::create([
                'nama_sparepart' => $request->nama_sparepart,
                'jumlah' => $request->jenis,
                'plat_sparepart' => $request->plat_sparepart,
            ]);
        
    
            sparepart::create($request->all());
    
            return redirect()->route('sparepart.index')->with('success', 'Kendaraan berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sparepart $sparepart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sparepart $sparepart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sparepart $sparepart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sparepart $sparepart)
    {
        //
    }
}
