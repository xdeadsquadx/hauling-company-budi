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
        <h1>Tambah Kendaraan</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Pengemudi</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>    
            <div class="form-group">
                <label for="status">Status</label>
                <input type="" class="form-control" id="nama" name="nama" required>
            </div>        
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pengemudi.store') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>