<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.10.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-iFYnumxmAfPWEvBBHVgQ1pcH7Bj9XLrhznQ6DpVFtF3dGwlEAqe4cmd4NY4cJALM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@5.10.0/dist/js/coreui.bundle.min.js" integrity="sha384-vaeoe43yarg/Wh3n+r4/PYyWggBr7VzI5l/1UeGOtIN4cgSvWlyBeZ7DlBEukNeq" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css'])
</head>
<body>
    @include('component.sidebar')
    <div class="content">
        <h1>Tambah Kendaraan</h1>
        <form action="{{ route('kendaraan.create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_kelas">kode_kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" required>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="form-group">
                <label for="peserta">Peserta</label>
                <select  class="form-multi-select" id="id_pengemudi" multiple data-coreui-search="global">
                    @foreach ($pengemudis as $pengemudi)
                        <option value="{{ $pengemudi->id_pengemudi }}">{{ $pengemudi->nama }}</option>
                    @endforeach
                </select>
            </div>
            
            
            
                      
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pelatihan.store') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    
</body>
</html>

<script src="multiselect-dropdown.js" ></script>