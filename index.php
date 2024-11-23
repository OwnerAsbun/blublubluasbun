<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            background-color: #333652;
            color: #f1f1f1;
            font-family: 'Press Start 2P', cursive;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        button {
            background-color: #ff6f61;
            border: none;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        button:hover {
            background-color: #ff3d2e;
        }
        @media (max-width: 600px) {
            button {
                padding: 10px 20px;
                font-size: 1em;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        window.onload = function() {
            alert("🎉 Selamat datang di Game Retro kami! 🎉");
        }
    </script>
</head>
<body>
    <div>
        <h1>Selamat Datang di Game</h1>
        <form action="selectParticipants.php" method="get">
            <button type="submit">Play</button>
        </form>
    </div>
</body>
</html>
