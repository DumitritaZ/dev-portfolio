<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-034427a3-b298-4b3c-9234-cc938e8f813a"></div>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('images/header.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            max-width: 1200px;
            width: 100%;
            margin: auto;
        }
        .btn-custom {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 5px 5px;
            margin: 5px 0;
            border-radius: 1px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .gallery-container {
            margin-top: 20px;
        }
        .gallery-container .card {
            background: rgba(255, 255, 255, 0.1);
        }
        footer {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <h1><strong><a href="index.php">Coffee Shop</a></strong></h1>
        <nav id="nav">
            <ul>
                <li><a href="logout.php" class="btn-custom">Deconectare</a></li>
            </ul>
        </nav>
    </header>

    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <main>
        <section id="main" class="wrapper">
            <div class="container">
                <header class="major special">
                    <h2>Galerie</h2>
                </header>
                
                <!-- AUDIO-->
                <p>Audio!</p>
                <audio controls>
                <source src="chevy & nalba - morning coffee (audio).mp3" type="audio/mpeg">
                </audio>

                <!-- VIDEO PLAYER -->
                <p>Video!</p>
                <video width="400" controls>
                <source src="H.E.R. - Best Part (Lyrics) Ft. Daniel Caesar.mp4" type="video/mp4">
                <source src="H.E.R. - Best Part (Lyrics) Ft. Daniel Caesar.ogg" type="video/ogg">
                </video>

                
                <!-- Upload -->
                <section class="gallery-links">
                    <div class="wrapper">
                        <p>Foto!</p>
                        <div class="gallery-container row">
                            <?php
                            include 'connection.php';
                            $sql = 'SELECT * FROM images';
                            $query = mysqli_query($con, $sql) or die(mysqli_error($con));
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                            <p class="card-text">
                                                <?php echo "<a href=\"view.php?id=" . $row['id'] . "\" class=\"btn-custom\">View</a> <a href=\"edit.php?id=" . $row['id'] . "\" class=\"btn-custom\">Edit</a> 
                                                <a href=\"delete.php?id=" . $row['id'] . "\" onclick=\"return confirm('Are you sure?')\" class=\"btn-custom\">Delete</a>" ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="text-center">
                            <a href="upload.php" class="btn btn-primary btn-custom">Încarcă</a>
                        </div>
                    </div>
                </section>

                
                <!-- Search Form -->
                <section class="gallery-links">
                    <div class="wrapper">
                        <form method="post" action="gallery1.php" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" name="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0 btn-custom" type="submit" name="sub">Search</button>
                        </form>
                        <div class="gallery-container row">
                            <?php
                            if (isset($_POST['sub'])) {
                                $search = mysqli_real_escape_string($con, $_POST['text']);
                                $sql1 = "SELECT * FROM images WHERE title LIKE '%$search%'";
                                $query1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
                                while ($row2 = mysqli_fetch_array($query1)) { ?>
                                    <div class="col-md-4">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="<?php echo $row2['image']; ?>" alt="<?php echo $row2['title']; ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row2['title']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } ?>
                        </div>
                    </div>
                </section>
                
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <ul class="icons">
                <li><a href="#" class="icon fa-facebook"></a></li>
                <li><a href="#" class="icon fa-twitter"></a></li>
                <li><a href="#" class="icon fa-instagram"></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Untitled</li>
                <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
            </ul>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
