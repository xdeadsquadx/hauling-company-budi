 Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan!');