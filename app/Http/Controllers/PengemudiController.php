<?php

namespace App\Http\Controllers;

use App\Models\pengemudi;
use Illuminate\Http\Request;

class PengemudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengemudis = pengemudi::all();
        return view('pengemudi.listPengemudi', compact('pengemudis'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengemudi.createPengemudi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pengemudi::create($request->all());

        return redirect()->route('pengemudi.index')->with('success', 'Pengemudi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengemudi $pengemudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengemudi $pengemudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengemudi $pengemudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengemudi $pengemudi)
    {
        //
    }
}
