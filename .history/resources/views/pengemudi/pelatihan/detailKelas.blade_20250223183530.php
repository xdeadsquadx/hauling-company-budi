<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body class="">
    @include('component.sidebar')
    <div class="content">
        <h1>Kelas </h1>
        <div class="edit-bar">
            <div style="display: flex; align-items: center;gap: 8px">
                <input type="text" placeholder="cari" style="font-size: larger; height: 100%;">
                <button type="button" class="btn btn-secondary" style="height: 100%;"><i class="bi bi-search"></i></button>
            </div>
            <a href="{{ route('surat_kendaraan.create') }}"> <button type="button" class="btn btn-success">Tambah  <i class="bi bi-plus-circle" style="margin-left: 3px"></i></button></a>
        </div>


        <table class="table table-hover">
            <thead>
              
                <tr>
                    <th scope="col">nama</th>
                    <th scope="col">Jenis Surat</th>
      
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $detail)
             
                <tr>
                    <th scope="row">{{ $detail->nama }}</th>
                
                    <td><form action="{{ route('pelatihan.kirim', ['id' => $detail->id_pengemudi, 'id_kelas_pengemudi' => $detail->id_kelas_pengemudi]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
                    </td></a>
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