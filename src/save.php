<?php 
session_start();

if (isset($_SESSION["username"])) {
    require_once "connection.php";

    $msg = "";

    if (isset($_POST['upload'])) {
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
                    if ($fileSize < 1000000) { // Limită de 1MB
                        $fileNewName = md5(uniqid(time())) . '.' . $fileExt;
                        $fileDestination = 'images/' . $fileNewName;
                        if (move_uploaded_file($fileTmpName, $fileDestination)) {
                            $text = mysqli_real_escape_string($con, $_POST['text']);
                            $sql = "INSERT INTO images (title, image) VALUES ('$text', '$fileDestination')";
                            if (mysqli_query($con, $sql)) {
                                header('Location: gallery1.php');
                                exit();
                            } else {
                                $msg = "Error: " . mysqli_error($con);
                            }
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
            $msg = "No file was uploaded.";
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Încarcă imaginea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php if ($msg != ""): ?>
            <div class="alert alert-danger mt-4">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
