<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\pasanagan_kendaraan;
use Illuminate\Http\Request;

class PasanganKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('operasional.pasanganKendaraan.indexPasangan');
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



}
