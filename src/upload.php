<?php include 'connection.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            background: url('images/header.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
            margin-top: 50px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-group label {
            color: #fff;
        }
        .btn-home {
            background-color: #6c757d;
            border: none;
            color: #fff;
            padding: 15px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .btn-home:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <h1><strong><a href="index.php">Coffee Shop</a></strong></h1>
    </header>

    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>Încarcă imagine</h2>
            </header>

            <div class="content">
                <form method="post" action="save.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div class="form-group">
                        <label for="image">Adaugă:</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Descriere:</label>
                        <textarea name="text" id="text" class="form-control" cols="40" rows="4" placeholder="Enter a description..." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="upload" class="btn btn-primary">Încarcă imaginea</button>
                        <a href="index.php" class="btn-home">Acasă</a>
                        <a href="gallery1.php" class="btn-home">Galerie</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
