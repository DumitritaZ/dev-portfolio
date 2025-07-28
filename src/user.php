<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Salut!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('images/header.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .userbox {
            width: 320px;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            margin: 0;
            padding: 0 0 20px;
            font-size: 22px;
        }
        .userbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .userbox a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            background-color: #007bff;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .userbox a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="userbox">
        <h3>Bine ai venit!</h3>
        <p>Unde vrei să mergi?</p>
        <p>
            <a href="index.php">Acasă</a><br>
            <a href="gallery1.php">Galerie</a><br>
            <a href="logout.php">Deconectare</a>
        </p>
    </div>
</body>
</html>
