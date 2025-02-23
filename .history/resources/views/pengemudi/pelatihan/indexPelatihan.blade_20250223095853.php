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
<body>
    @include('component.sidebar')
    <div class="content">
        <h1>Kelas Pelatihan</h1>
        <div class="edit-bar">
            <div style="display: flex; align-items: center; gap: 8px">
                <input type="text" placeholder="cari" style="font-size: larger; height: 100%;">
                <button type="button" class="btn btn-secondary" style="height: 100%;"><i class="bi bi-search"></i></button>
            </div>
            <button type="button" class="btn btn-success">Tambah <i class="bi bi-plus-circle" style="margin-left: 3px"></i></button>
        </div>

        <div class="list-pelatihan">
            @foreach ($kelas_pelatihans as $kelas)
            <div class="box-pelatihan">
                <h3>{{ $kelas->nama_kelas }}</h3>
                <h4>Kode : {{ $kelas->kode_kelas }}</h4>
                <h5>Jumlah Peserta : {{ $kelas->jumlah_peserta }} orang</h5>
                <button class="btn btn-primary edit-btn" data-id="{{ $kelas->id }}" data-nama="{{ $kelas->nama_kelas }}" data-peserta='@json($kelas->peserta)'>Edit</button>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Daftar Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 id="kelasNama"></h6>
                    <ul id="pesertaList"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function () {
                let namaKelas = this.getAttribute('data-nama');
                let peserta = JSON.parse(this.getAttribute('data-peserta'));
                
                document.getElementById('kelasNama').innerText = `Kelas: ${namaKelas}`;
                let pesertaList = document.getElementById('pesertaList');
                pesertaList.innerHTML = '';
                peserta.forEach(p => {
                    let li = document.createElement('li');
                    li.innerText = p.nama;
                    pesertaList.appendChild(li);
                });
                
                $('#editModal').modal('show');
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
