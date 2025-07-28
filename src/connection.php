<?php
$con = mysqli_connect('mysql_db', 'root', 'toor', 'galerie');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
