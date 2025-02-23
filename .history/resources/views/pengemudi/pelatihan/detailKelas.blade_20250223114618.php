<!-- resources/views/vehicle-documents/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Surat Kendaraan</title>
    
    <!-- Combine CSS imports for better performance -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
    @include('components.sidebar')
    
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Surat-menyurat Kendaraan</h1>
            
            <div class="d-flex gap-3">
                <div class="input-group">
                    <input type="text" 
                           class="form-control" 
                           id="searchInput" 
                           placeholder="Cari surat kendaraan..."
                           aria-label="Search documents">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
                
                <a href="{{ route('surat_kendaraan.create') }}" class="btn btn-success">
                    Tambah <i class="bi bi-plus-circle"></i>
                </a>
            </div>
        </div>

        <form id="documentForm" action="{{ route('pelatihan.kirim') }}" method="POST">
            @csrf
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="selectAll">
                                </div>
                            </th>
                            <th>Nama</th>
                            <th>Jenis Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($details as $detail)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" 
                                               class="form-check-input document-checkbox" 
                                               name="selected[]" 
                                               value="{{ $detail->id }}">
                                    </div>
                                </td>
                                <td>{{ $detail->nama }}</td>
                                <td>{{ $detail->jenis_surat }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <button type="submit" class="btn btn-primary mt-3" id="submitButton" disabled>
                Kirim
            </button>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('documentForm');
            const selectAll = document.getElementById('selectAll');
            const submitButton = document.getElementById('submitButton');
            const checkboxes = document.querySelectorAll('.document-checkbox');

            // Handle select all functionality
            selectAll.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                updateSubmitButton();
            });

            // Handle individual checkbox changes
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateSubmitButton();
                    // Update select all checkbox
                    selectAll.checked = [...checkboxes].every(cb => cb.checked);
                });
            });

            // Enable/disable submit button based on selections
            function updateSubmitButton() {
                submitButton.disabled = ![...checkboxes].some(cb => cb.checked);
            }

            // Handle form submission
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                try {
                    const response = await fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            selected: [...checkboxes]
                                .filter(cb => cb.checked)
                                .map(cb => cb.value)
                        })
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        throw new Error(data.message || 'Terjadi kesalahan');
                    }

                    alert(data.message);
                    location.reload();
                } catch (error) {
                    alert(error.message);
                    console.error('Error:', error);
                }
            });
        });
    </script>
</body>
</html>