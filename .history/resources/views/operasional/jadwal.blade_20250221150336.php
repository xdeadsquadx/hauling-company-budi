<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css'])     
</head>
<body class="">
    @include('component.sidebar')
<div class="content">
    <h1>Jadwal Hauling</h1>
    <input type="text" id="tanggalPicker" placeholder="Pilih Tanggal">

    <table></table>
</div>

</body>

<script>
    flatpickr("#tanggalPicker", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>