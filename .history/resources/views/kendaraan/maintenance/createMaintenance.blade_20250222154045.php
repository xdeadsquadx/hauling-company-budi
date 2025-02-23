<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
</head>
<body>
    @include('component.sidebar')
    <div class="content">
        <h1>Tambah Kendaraan yang ingin di maintenance</h1>
        <form action="" method="POST">
            @csrf
            <label for="kendaraan">jenis Kendaraan</label>
            <select name="kendaraan_id" class="form-control">
                <option value="">-- Pilih Kendaraan --</option>
                @foreach($kendaraans as $kendaraan)
                    <option value="{{ $kendaraan->id }}">{{ $kendaraan->plat_kendaraan }}</option>
                @endforeach
            </select>
            
            <div class="form-group">
                <label for="tipe">jenis Kendaraan</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="form-group">
                <label for="plat">Plat Kendaraan</label>
                <input type="text" class="form-control" id="plat_kendaraan" name="plat_kendaraan" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('kendaraan.store') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>