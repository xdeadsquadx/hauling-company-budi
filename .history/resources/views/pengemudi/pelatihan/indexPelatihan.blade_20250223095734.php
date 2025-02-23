<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        @include('component.sidebar')
        <div class="content">
            <h1>Kelas Pelatihan</h1>
            <div class="edit-bar">
                <div style="display: flex; align-items: center; gap: 8px">
                    <input type="text" placeholder="cari" style="font-size: larger; height: 100%;">
                    <button type="button" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                </div>
                <button type="button" class="btn btn-success">Tambah <i class="bi bi-plus-circle"></i></button>
            </div>

            <div class="list-pelatihan">
                <div class="box-pelatihan" v-for="kelas in kelasPelatihans" :key="kelas.id">
                    <h3>{{ kelas.nama_kelas }}</h3>
                    <h4>Kode : {{ kelas.kode_kelas }}</h4>
                    <h5>Jumlah Peserta : {{ kelas.jumlah_peserta }} orang</h5>
                    <button class="btn btn-primary" @click="openModal(kelas)">Edit</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Daftar Peserta</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>Kelas: {{ modalKelas.nama_kelas }}</h6>
                        <ul class="list-group">
                            <li v-if="modalKelas.peserta.length === 0" class="list-group-item text-muted">
                                Tidak ada peserta
                            </li>
                            <li v-for="peserta in modalKelas.peserta" :key="peserta.id" class="list-group-item">
                                {{ peserta.nama }}
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
new Vue({
    el: '#app',
    delimiters: ['[[', ']]'], // Biar nggak konflik sama Blade
    data: {
        kelasPelatihans: @json($kelas_pelatihans),
        modalKelas: { nama_kelas: '', peserta: [] }
    },
    methods: {
        openModal(kelas) {
            this.modalKelas = kelas;
            $('#editModal').modal('show');
        }
    }
});

</body>
