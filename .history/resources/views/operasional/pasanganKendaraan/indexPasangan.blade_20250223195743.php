<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/build/assets/app.css') }}">  
    <!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="">
    @include('component.sidebar')
<div class="content">
    <h1>List Kendaraan</h1>
    <div class="edit-bar">
      <div style="display: flex; align-items: center;gap: 8px">
          <input type="text" placeholder="cari kendaraan" style="font-size: larger; height: 100%;">
          <button type="button" class="btn btn-secondary" style="height: 100%;"><i class="bi bi-search"></i></button>
      </div>
      <a href="{{ route('kendaraan.create') }}"><button type="button" class="btn btn-success">Tambah Kendaraan</button></a>
  </div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Plat Kendaraan</th>
            <th scope="col">Merek Kendaraan</th>
            <th scope="col">Pengemudi</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kendaraans as $kendaraan)
          <tr>
            <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
{{ var_dump($pengemudis) }}
                  @csrf
                  @method('PUT')
                  <th scope="row">{{ $kendaraan->plat_kendaraan }}</th>
                  <td>{{ $kendaraan->merek }}</td>
                  <td>
                  <div class="form-group">
                    <select name="id_kendaraan" class="form-control">
                        <option value="">{{ $kendaraan->nama_pengemudi }}</option>
                        @foreach($pengemudis as $pengemudi)
                            <option value="{{ $pengemudi->id_pengemudi }}">{{ $pengemudi->nama_pengemudi }}</option>
                        @endforeach
                    </select>
                </div>
              </td>
                  <td>
                      <button type="submit" class="btn btn-success btn-sm">Update</button>
                  </td>
                  <td>
                      <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                      <button type="button" class="btn btn-primary btn-sm">Ganti</button>
                  </td>
              </form>
          </tr>
          @endforeach
      </tbody>
      
        
      </table>
</div>

</body>

<script>
    flatpickr("#tanggalPicker", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>