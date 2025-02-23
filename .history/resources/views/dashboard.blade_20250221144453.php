<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])


  
       
</head>
<body>
    @include('component.sidebar')
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
