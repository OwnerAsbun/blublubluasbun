<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numParticipants = $_POST['numParticipants'];
    session_start();
    $_SESSION['numParticipants'] = $numParticipants;
} else {
    header("Location: selectParticipants.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Nama</title>
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
        input, button {
            background-color: #ff6f61;
            border: none;
            color: #fff;
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        button:hover, input:hover {
            background-color: #ff3d2e;
        }
        #nameFields {
            margin-top: 20px;
        }
        @media (max-width: 600px) {
            input, button {
                padding: 8px;
                font-size: 0.9em;
            }
        }
        .retro-deco {
            background-image: url('retro-deco.png'); /* Tambahkan gambar retro yang lucu di sini */
            background-size: cover;
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        function validateAndSaveNames() {
            const numParticipants = <?php echo $numParticipants; ?>;
            const names = [];
            let allFilled = true;
            for (let i = 0; i < numParticipants; i++) {
                const name = document.getElementById(`name${i}`).value.trim();
                if (name === '') {
                    allFilled = false;
                    break;
                }
                names.push(name);
            }
            if (allFilled) {
                const namesInput = document.createElement('input');
                namesInput.type = 'hidden';
                namesInput.name = 'names';
                namesInput.value = JSON.stringify(names);
                document.getElementById('nameForm').appendChild(namesInput);
                return true;
            } else {
                alert('Semua nama peserta harus diisi.');
                return false;
            }
        }

        window.onload = function() {
            const container = document.getElementById('nameFields');
            const numParticipants = <?php echo $numParticipants; ?>;
            for (let i = 0; i < numParticipants; i++) {
                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = `fill ur name`;
                input.id = `name${i}`;
                input.name = `name${i}`;
                container.appendChild(input);
                container.appendChild(document.createElement('br'));
            }
        }
    </script>
</head>
<body>
    <div>
        <div> <h1> Isi nama peserta <h1> </div>
        <div>
            <form id="nameForm" action="play.php" method="post" onsubmit="return validateAndSaveNames()">
                <div id="nameFields" class="retro-deco"></div>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>

</body>
</html>
