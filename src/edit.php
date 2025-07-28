<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

include "connection.php";

$msg = "";
$record = [
    'title' => '',
    'image' => ''
];

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $target = "";

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $allowed = ['jpg', 'jpeg', 'png', 'gif']; 
            $fileName = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $fileSize = $_FILES['image']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];

            $fileExtArray = explode('.', $fileName);
            $fileExt = strtolower(end($fileExtArray));
            if (in_array($fileExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) { // Limit of 1MB
                        $fileNewName = md5(uniqid(time())) . '.' . $fileExt;
                        $fileDestination = 'images/' . $fileNewName;
                        if (move_uploaded_file($fileTmpName, $fileDestination)) {
                            $target = $fileDestination;
                        } else {
                            $msg = "Failed to upload the image.";
                        }
                    } else {
                        $msg = "Your file is too big.";
                    }
                } else {
                    $msg = "There was an error uploading your file.";
                }
            } else {
                $msg = "You cannot upload files of this type.";
            }
        } else {
            $target = $_POST['existing_image'];
        }

        if ($target !== "") {
            $stmt = $con->prepare("UPDATE images SET title = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssi", $title, $target, $id);
            if ($stmt->execute()) {
                header("Location: gallery1.php");
                exit();
            } else {
                $msg = "Error updating record: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        $stmt = $con->prepare("SELECT * FROM images WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $record = $result->fetch_assoc();
        } else {
            $msg = "Record not found.";
        }
        $stmt->close();
    }
} else {
    $msg = "Invalid ID.";
}

$con->close();
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
                <li><a href="index.php">Acasă</a></li>
                <li><a href="gallery1.php">Galerie</a></li>
            </ul>
        </nav>
    </header>

    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <!-- Main -->
    <div id="main">
        <section>
            <h1>Editează:</h1>
            <?php if ($msg != ""): ?>
                <div class="alert alert-danger"><?php echo $msg; ?></div>
            <?php endif; ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $id; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($record['image']); ?>"/>
                <div>
                    Titlu:<br/><input type="text" name="title" value="<?php echo htmlspecialchars($record['title']); ?>"/><br/>
                </div>
                <div>
                    Imagine: <br/><input type="file" name="image"><br/>
                    <?php if ($record['image']): ?>
                        <img src="<?php echo htmlspecialchars($record['image']); ?>" width="50%"><br/>
                    <?php endif; ?>
                </div>
                <div>
                    <input type="submit" name="submit" value="Edit"/>
                </div>
            </form>
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
