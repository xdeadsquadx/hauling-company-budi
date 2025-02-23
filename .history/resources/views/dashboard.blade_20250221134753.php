<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            height: 100vh;
            background: #d3d3d3;
        }
        .sidebar {
            width: 250px;
            background: #2c2c2c;
            color: white;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
        }
        .sidebar ul li {
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .sidebar ul li:hover {
            background: #444;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .content h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li onclick="showContent('Kendaraan')">Kendaraan</li>
            <li onclick="showContent('Pegawai')">Pegawai</li>
            <li onclick="showContent('Operation')">Operation</li>
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
    </script>
</body>
</html>