<?php
require_once 'config.php';

$id = $_GET['id'] ?? 0;

if ($id > 0) {
    $query = "DELETE FROM produk WHERE id = $id";
    mysqli_query($conn, $query);
}

header('Location: produk.php');
exit();