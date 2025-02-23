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
        <h1>List Sparepart</h1>
        <div class="edit-bar">
            <div style="display: flex; align-items: center;gap: 
            ">
                <input type="text" placeholder="cari kendaraan" style="font-size: larger; height: auto; ">
                <button type="button" class="btn btn-secondary" style="height: 100%;"><i class="bi bi-search"></i></button>
            </div>
            <button type="button" class="btn btn-success">Tambah Sparepart</button>
        </div>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sparepart</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">batas minimal</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><button type="button" class="btn btn-danger">Hapus</button><button type="button"
                            class="btn btn-primary">Ganti</button></td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>

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