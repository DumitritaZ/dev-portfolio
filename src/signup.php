<?php 
    $number1 = rand(1, 9);
    $number2 = rand(1, 9);
    $sum = $number1 + $number2;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Coffee Shop</title>
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
            height: 100%;
            overflow: hidden;
            color: #fff;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 8px; 
            border-radius: 10px;
            max-width: 600px; 
            width: 100%;
            text-align: center;
        }
        .form-group {
            margin-bottom: 10px; 
        }
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .btn-login {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 9px; 
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .form-check-label, .input-group-text {
            color: #fff;
        }
        .input-group-text {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
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
            display: inline-block;
            margin-top: 10px;
        }
        .btn-home:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container">
            <h2 class="text-center">Înscrie-te!</h2>
            <form method="post" action="validate.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="name">Nume:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="password">Parolă:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="captcha">Captcha:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><?php echo $number1 . '+' . $number2 . '='; ?></span>
                        </div>
                        <input type="hidden" name="correctsum" value="<?php echo $sum; ?>">
                        <input type="text" class="form-control" name="captcha" placeholder="Enter the sum">
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="subscribe" name="subscribe">
                    <label class="form-check-label" for="subscribe">Subscribe for the latest updates, tips, and tricks</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="human" name="human">
                    <label class="form-check-label" for="human">Sunt om, nu robot</label>
                </div>
                <button type="submit" name="signup" class="btn-login">Înregistrare</button>
                <a href="index.php" class="btn-home">Acasă</a>
            </form>
        </div>
    </div>
</body>
</html>
