<?php

namespace App\Http\Controllers;

use App\Models\maintenance;
use App\Models\kendaraan;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenances = Kendaraan::join('maintenances', 'kendaraans.id_kendaraan', '=', 'maintenances.id_kendaraan')
        ->where('kendaraans.status_maintenance', '!=', 1)
        ->select('kendaraans.plat_kendaraan', 'maintenances.*')
        ->get();
        return view('kendaraan.maintenance.indexMaintenance', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = Kendaraan::where('status_maintenance', '==', 0)->get();
        $spareparts = Sparepart::all();
        return view('kendaraan.maintenance.createMaintenance', compact('kendaraans','spareparts'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        maintenance::create($request->all());

        return redirect()->route('maintenance.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }

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
