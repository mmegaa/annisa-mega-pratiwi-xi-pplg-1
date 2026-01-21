<?php
require_once 'config.php';

$id = $_GET['id'] ?? 0;
$query = "SELECT * FROM produk WHERE id = $id";
$result = mysqli_query($conn, $query);
$produk = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $kandungan = mysqli_real_escape_string($conn, $_POST['kandungan']);
    $harga = (int)$_POST['harga'];
    $stok = (int)$_POST['stok'];
    
    $update_query = "UPDATE produk SET 
                    nama = '$nama',
                    kategori = '$kategori',
                    deskripsi = '$deskripsi',
                    kandungan = '$kandungan',
                    harga = $harga,
                    stok = $stok
                    WHERE id = $id";
    
    if (mysqli_query($conn, $update_query)) {
        header('Location: produk.php?success=1');
        exit();
    }
}

include 'header.php';
?>

<!-- Form edit mirip dengan tambah.php, tapi dengan value yang sudah ada -->