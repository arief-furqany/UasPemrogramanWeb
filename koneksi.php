<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbbuku";

$koneksi = mysqli_connect($server, $username, $password, $database)
or die("Database tidak bisa dibuka");
?>