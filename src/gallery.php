<!DOCTYPE HTML>

<html>
<head>
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            background: url('images/header.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: sans-serif;
            color: #fff;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
        }
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .gallery-container div {
            flex: 1 0 30%;
            margin: 10px;
            box-sizing: border-box;
        }
        .gallery-container img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }
        .gallery-container img:hover {
            transform: scale(1.05);
        }
        .gallery-container h3 {
            text-align: center;
            color: #fff;
        }
        audio, video {
            display: block;
            margin: 20px auto;
            width: 80%;
        }
        .icons a {
            color: #fff;
        }
    </style>
</head>
<body>

    <!--COOKIES-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-034427a3-b298-4b3c-9234-cc938e8f813a"></div>
    <!--END OF COOKIES-->

    <!-- Header -->
    <header id="header">
        <h1><strong><a href="index.php">Coffee Shop</a></strong></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Acasă</a></li>
                <li><a href="gallery.php">Galerie</a></li>
            </ul>
        </nav>
    </header>

    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>Galerie</h2>
            </header>

            <section class="gallery-links">
                <div class="wrapper">
                    <div class="gallery-container">
                        <?php
                        include 'connection.php';
                        $sql = 'SELECT * FROM images';
                        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div>
                            <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                            <h3><?php echo $row['title']; ?></h3>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <p>Audio!</p>
            <audio controls>
                <source src="chevy & nalba - morning coffee (audio).mp3" type="audio/mpeg">
            </audio>

            <p>Video!</p>
            <video controls>
                <source src="H.E.R. - Best Part (Lyrics) Ft. Daniel Caesar.mp4" type="video/mp4">
                <source src="H.E.R. - Best Part (Lyrics) Ft. Daniel Caesar.ogg" type="video/ogg">
            </video>
        </div>
    </section>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
