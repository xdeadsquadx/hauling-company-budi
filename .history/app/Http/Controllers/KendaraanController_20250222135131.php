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
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        kendaraan::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
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
    public function show(kendaraan $kendaraan)
    {
        //
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
