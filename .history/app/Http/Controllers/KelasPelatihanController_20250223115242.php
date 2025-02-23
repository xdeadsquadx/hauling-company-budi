<?php

namespace App\Http\Controllers;

use App\Models\kelas_pelatihan;
use App\Models\kelas_pengemudi;
use App\Models\pengemudi;
use Illuminate\Http\Request;

class KelasPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas_pelatihans = kelas_pelatihan::all();
        return view('pengemudi.pelatihan.indexPelatihan', compact('kelas_pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengemudis = Pengemudi::where('status', 0)->get();
        return view('pengemudi.pelatihan.createPelatihan', compact('pengemudis'));
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Buat kelas_pelatihan dulu
        $data = $request->all();
        $data['jumlah_peserta'] = count($request->id_pengemudi);
        
        $kelasPelatihan = kelas_pelatihan::create($data);
        
    
        // Looping untuk insert ke kelas_pengemudi
        foreach ($request->id_pengemudi as $pengemudiId) {
            kelas_pengemudi::create([
                'id_pengemudi' => $pengemudiId,
                'id_kelas' => $kelasPelatihan->id // Ambil ID dari kelas_pelatihan yang baru dibuat
            ]);
        }
    
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
    $details = kelas_pelatihan::join('kelas_pengemudis', 'kelas_pelatihans.id_kelas', '=', 'kelas_pengemudis.id_kelas')
    ->join('pengemudis', 'pengemudis.id_pengemudi', 'kelas_pengemudis.id_pengemudi')
        ->where('kelas_pelatihans.id_kelas', '=', $id)
        ->get();

     
    return view('pengemudi.pelatihan.detailKelas', compact('details'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas_pelatihan $kelas_pelatihan)
    {
        //
    }

    public function kirim($id)
    {
        update::
        return response()->json(['message' => 'Data berhasil diperbarui!']);
    }
}
