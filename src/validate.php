<?php
ob_start();

function died($error) {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "We are very sorry, but there were error(s) found with the form you submitted.";
    echo "<br/><br/>" . $error . "<br/><br/>";
    echo "Please go back and fix these errors.";
    echo "</div>";
    die();
}

if (isset($_POST['login']) || isset($_POST['signup'])) {
    $servername = "mysql_db";
    $username_db = "root";
    $password_db = "toor";
    $dbname = "galerie";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['login'])) {
        $name = htmlspecialchars(trim($_POST['username']));
        $pass = htmlspecialchars(trim($_POST['password']));
        $captcha = htmlspecialchars(trim($_POST['captcha']));
        $correctsum = htmlspecialchars(trim($_POST['correctsum']));

        $stmt = $conn->prepare("SELECT * FROM coffee WHERE username = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                if ($captcha == $correctsum) {
                    if (isset($_POST['remember'])) {
                        setcookie('name', $name, time() + 60 * 60 * 24 * 365);
                        setcookie('pass', $pass, time() + 60 * 60 * 24 * 365);
                    }
                    session_start();
                    $_SESSION['username'] = $name;
                    header("location:user.php");
                    exit();
                } else {
                    $error = "The CAPTCHA is incorrect. <a href='login.php'>Try again</a>.";
                    died($error);
                }
            } else {
                $error = "Username or password is incorrect. <a href='login.php'>Try again</a>.";
                died($error);
            }
        } else {
            $error = "Username or password is incorrect. <a href='login.php'>Try again</a>.";
            died($error);
        }

        $stmt->close();
    } elseif (isset($_POST['signup'])) {
        $username = htmlspecialchars(trim($_POST['username']));
        $name = htmlspecialchars(trim($_POST['name']));
        $password = htmlspecialchars(trim($_POST['password']));
        $email = htmlspecialchars(trim($_POST['email']));
        $subscribe = isset($_POST['subscribe']) ? 1 : 0;
        $human = isset($_POST['human']) ? 1 : 0;

        if (!empty($username) && !empty($name) && !empty($password) && !empty($email)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO coffee (username, name, password, email, subscribe, human) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssii", $username, $name, $hashed_password, $email, $subscribe, $human);

            if ($stmt->execute() === TRUE) {
                header("location: login.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please fill in all fields.";
        }
    }

    $conn->close();
} else {
    header("location: login.php");
    exit();
}

ob_end_flush();
?>
