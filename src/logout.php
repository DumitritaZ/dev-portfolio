<?php
$cookie_name1='name';
$cookie_name2='pass';
unset($_COOKIE['name']);
unset($_COOKIE['pass']);
setcookie($cookie_name1, '',time() - 3600);
setcookie($cookie_name2, '', time() - 3600);
session_start();
session_unset();
session_destroy();
header("location:index.php");
?>