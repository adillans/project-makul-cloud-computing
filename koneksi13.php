<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan13";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
