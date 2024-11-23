<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jumlah Peserta</title>
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
        select, button {
            background-color: #ff6f61;
            border: none;
            color: #fff;
            padding: 15px;
            font-size: 1em;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        button:hover, select:hover {
            background-color: #ff3d2e;
        }
        @media (max-width: 600px) {
            select, button {
                padding: 10px;
                font-size: 0.9em;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        function validateSelection() {
            const numParticipants = document.getElementById('numParticipants').value;
            if (numParticipants >= 2 && numParticipants <= 4) {
                return true;
            } else {
                alert('Jumlah peserta harus antara 2 hingga 4.');
                return false;
            }
        }

        window.onload = function() {
            alert("🔢 Pilih jumlah peserta untuk melanjutkan! 🔢");
        }
    </script>
</head>
<body>
    <div>
        <h1>Pilih Jumlah Peserta</h1>
        <form action="enterNames.php" method="post" onsubmit="return validateSelection()">
            <select name="numParticipants" id="numParticipants">
                <option value="">Pilih jumlah peserta</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
