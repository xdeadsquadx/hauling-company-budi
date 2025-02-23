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
        <h1>Surat-menyurat Kendaraan</h1>
        <div class="edit-bar">
            <div style="display: flex; align-items: center;gap: 8px">
                <input type="text" placeholder="cari" style="font-size: larger; height: 100%;">
                <button type="button" class="btn btn-secondary" style="height: 100%;"><i class="bi bi-search"></i></button>
            </div>
            <a href="{{ route('surat_kendaraan.create') }}">
                <button type="button" class="btn btn-success">Tambah <i class="bi bi-plus-circle" style="margin-left: 3px"></i></button>
            </a>
        </div>

        <form id="formKirim">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" id="checkAll"></th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Surat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                    <tr>
                        <td><input type="checkbox" class="cekbox" name="selected[]" value="{{ $detail->id }}"></td>
                        <td>{{ $detail->nama }}</td>
                        <td>{{ $detail->jenis_surat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
        </form>
    </div>

</body>

<script>
    // Checkbox "Pilih Semua"
    document.getElementById("checkAll").addEventListener("change", function () {
        document.querySelectorAll(".cekbox").forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    // Kirim data dengan AJAX
    document.getElementById("formKirim").addEventListener("submit", function (event) {
        event.preventDefault();

        let selected = [];
        document.querySelectorAll(".cekbox:checked").forEach(checkbox => {
            selected.push(checkbox.value);
        });

        if (selected.length === 0) {
            alert("Pilih minimal satu data!");
            return;
        }

        fetch("{{ route('pelatihan.kirim') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ selected: selected })
        })
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error("Error:", error));
    });
</script>
