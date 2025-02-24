<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/build/assets/app-CBpTEU8c.css') }}">
<link rel="stylesheet" href="{{ asset('/build/assets/app-DnVUw_vK.css') }}">  
    <!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="">
    @include('component.sidebar')
<div class="content">
    <h1>Jadwal Hauling</h1>
    <div class="edit-bar">
      <div style="display: flex; align-items: center;gap: 8px">
        <input type="text" id="tanggalPicker" placeholder="Pilih Tanggal">
          <button type="button" class="btn btn-secondary" style="height: 100%;"><i
                  class="bi bi-search"></i></button>
      </div>
      <form action="{{ route('jadwalHauling.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Tambah <i class="bi bi-plus-circle" style="margin-left: 3px"></i></button>
    </form>
    
    
  </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pengemudi</th>
            <th scope="col">ID kendaraan</th>
            <th scope="col">Plat Kendaraan</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jadwals as $jaf)
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><button type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-primary">Ganti</button></td>
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