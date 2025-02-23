<?php

namespace App\Http\Controllers;

use App\Models\maintenance;
use App\Models\kendaraan;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenances = Kendaraan::where('status_maintenance', '!=', 1)->get();
        return view('kendaraan.maintenance.indexMaintenance', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraan = Kendaraan::where('status_maintenance', '!=', 1)->get();
        return view('maintenance.createMaintenance', compact('maintenances'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        maintenance::create($request->all());

        return redirect()->route('maintenance.index')->with('success', 'Kendaraan berhasil ditambahkan!');
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
