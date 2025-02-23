<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Modal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .close {
            cursor: pointer;
            color: red;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <button id="openModal">Buka Popup</button>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Ini adalah popup modal!</p>
        </div>
    </div>
    <script>
        document.getElementById("openModal").addEventListener("click", function() {
            document.getElementById("myModal").style.display = "flex";
        });
        document.querySelector(".close").addEventListener("click", function() {
            document.getElementById("myModal").style.display = "none";
        });
        window.addEventListener("click", function(event) {
            if (event.target === document.getElementById("myModal")) {
                document.getElementById("myModal").style.display = "none";
            }
        });
    </script>
</body>
</html>
