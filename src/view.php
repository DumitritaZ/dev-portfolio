<?php
session_start();
if (isset($_SESSION["username"])) {
    include "connection.php";

    $msg = "";
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $con->prepare("SELECT * FROM images WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $title = htmlspecialchars($row["title"]);
            $image = htmlspecialchars($row["image"]);
        } else {
            $msg = "No image found.";
        }

        $stmt->close();
    } else {
        $msg = "Invalid ID.";
    }

    $con->close();
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

    <!-- Header -->
    <header id="header">
        <h1><strong><a href="index.php">Coffee Shop</a></strong></h1>
        <nav id="nav">
            <ul>
                <li> <a href="gallery1.php">Înapoi</a></li>
            </ul>
        </nav>
    </header>

    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <div id="main">
        <section>
            <?php if (!empty($msg)): ?>
                <p><?php echo $msg; ?></p>
            <?php else: ?>
                <p>Titlu: <?php echo $title; ?></p>
                <p>Imagine: <img src="<?php echo $image; ?>" width="100%"></p>
            <?php endif; ?>
        </section>
    </div>

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
