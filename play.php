<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = json_decode($_POST['names'], true);
    $_SESSION['names'] = $names;

    // Shuffle the names array
    shuffle($_SESSION['names']);
} else {
    header("Location: enterNames.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Bermain</title>
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #ff6f61;
            border: none;
            color: #fff;
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            margin: 10px 0;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        @media (max-width: 600px) {
            li {
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
</head>
<body>
    <div class="retro-deco">
        <h1>Halaman Bermain</h1>
        <ul id="playerList">
            <?php
            foreach ($_SESSION['names'] as $name) {
                echo "<li>$name</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
