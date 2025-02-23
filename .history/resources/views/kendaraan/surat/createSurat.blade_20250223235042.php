<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan</title>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    @include('component.sidebar')
    <div class="content">
        <h1>Tambah Surat</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="kendaraan">Kendaraan</label>
                <select name="id_kendaraan" class="form-control">
                    <option value="">-- Pilih Kendaraan --</option>
                    @foreach($kendaraans as $kendaraan)
                        <option value="{{ $kendaraan->id_kendaraan }}">{{ $kendaraan->plat_kendaraan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_surat">jenis surat</label>
                <input type="text" class="form-control" id="jenis_surat" name="jenis_surat">
            </div>

            <div class="form-group">
                <label for="tanggal terbit">tanggal terbit</label>
                <input type="text" id="tanggalPicker" placeholder="Pilih Tanggal" name="tanggal_terbit">
            </div>
            
            <div class="form-group">
                <label for="tanggal expired">tanggal expired</label>
                <input type="text" id="tanggalPicker" placeholder="Pilih Tanggal" name="tanggal_expired">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('sparepart.store') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#tanggalPicker", {
            enableTime: false,
            dateFormat: "Y-m-d",
            altInput: true,
            altFormat: "d-m-Y",
            locale: "id"
        });
    });
</script>