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
        return view('pengemudi.listKendaraan', compact('pengemudis'));
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
