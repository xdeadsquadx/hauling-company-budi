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
        <h1>Kelas Pelatihan</h1>
        <div class="edit-bar">
            <div style="display: flex; align-items: center;gap: 8px">
                <input type="text" placeholder="cari" style="font-size: larger; height: 100%;">
                <button type="button" class="btn btn-secondary" style="height: 100%;"><i
                        class="bi bi-search"></i></button>
            </div>
            <button type="button" class="btn btn-success">Tambah <i class="bi bi-plus-circle"
                    style="margin-left: 3px"></i></button>
        </div>

        <div class="list-pelatihan">
           @foreach ($kelas_pelatihans as $kelas )
   
            <div class="box-pelatihan">
                <h3>{{ $kelas->nama_kelas }}</h3>
                <h4>Kode :  {{ $kelas->kode_kelas }}</h4>
                <h5>Jumlah Peserta : {{ $kelas->jumlah_peserta }} orang</h5>
                <a href="{{  }}"><button class="btn btn-primary">Edit</button></a>
            </div>
                    
           @endforeach
        </div>

    </div>


</body>

<script>
    flatpickr("#tanggalPicker", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>