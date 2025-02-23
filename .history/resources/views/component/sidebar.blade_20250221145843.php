<div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
        <li onclick="toggleDropdown('operasionalDropdown')">Operasional</li>
        <ul class="dropdown" id="operasionalDropdown">
            <li onclick="showContent('Surat')">Jadwal Hauling</li>
            <li onclick="showContent('Maintenance')">Monitoring</li>
        </ul>
        <li onclick="toggleDropdown('kendaraanDropdown')">Kendaraan</li>
        <ul class="dropdown" id="kendaraanDropdown">
            <li><a href="{{ route('jadwal') }}">List </a></li>
            <li><a href="{{ route('jadwal') }}">Sparepart</a></li>
            <li><a href="{{ route('jadwal') }}">Maintenance Monitoring</a></li>
            <li><a href="{{ route('jadwal') }}">Surat Kendaraan</a></li>
        </ul>
        <li onclick="toggleDropdown('pengemudiDropdown')">Pengemudi</li>
        <ul class="dropdown" id="pengemudiDropdown">
            <li onclick="showContent('Surat')">List Pengemudi</li>
            <li onclick="showContent('List')">Pelatihan</li>
        </ul>
    </ul>
</div>

<script>
    function showContent(menu) {
        document.getElementById('mainContent').innerHTML = `
            <h1>${menu}</h1>
            <p>Menampilkan informasi tentang ${menu}.</p>
        `;
    }
    
    function toggleDropdown(id) {
        var dropdown = document.getElementById(id);
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
            dropdown.style.display = "block";
        } else {
            dropdown.style.display = "none";
        }
    }
</script>