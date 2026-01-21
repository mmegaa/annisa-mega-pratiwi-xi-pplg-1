<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "annie_skin";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Set charset
mysqli_set_charset($conn, "utf8");
?>