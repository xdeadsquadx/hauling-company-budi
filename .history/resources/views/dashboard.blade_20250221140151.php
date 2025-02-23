<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])


  
       
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li onclick="toggleDropdown('kendaraanDropdown')">Operasional</li>
            <ul class="dropdown" id="kendaraanDropdown">
                <li onclick="showContent('Surat')">Surat</li>
                <li onclick="showContent('List')">List</li>
                <li onclick="showContent('Maintenance')">Maintenance</li>
            </ul>
            <li onclick="toggleDropdown('kendaraanDropdown')">Kendaraan</li>
            <ul class="dropdown" id="kendaraanDropdown">
                <li onclick="showContent('Surat')">list Kendaraan</li>
                <li onclick="showContent('List')">Sparepart</li>
                <li onclick="showContent('Maintenance')">Maintenance Monitoring</li>
            </ul>
            <li onclick="toggleDropdown('kendaraanDropdown')">Pengemudi</li>
            <ul class="dropdown" id="kendaraanDropdown">
                <li onclick="showContent('Surat')">Surat</li>
                <li onclick="showContent('List')">List</li>
                <li onclick="showContent('Maintenance')">Maintenance</li>
            </ul>
        </ul>
    </div>
    <div class="content" id="mainContent">
        <h1>Selamat Datang di Dashboard</h1>
        <p>Pilih menu di sebelah kiri untuk melihat informasi.</p>
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
</body>
</html>
