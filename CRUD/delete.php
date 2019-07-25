<?php
require 'setting.php';

if (isset($_GET['id'])) {

    $key = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM barang WHERE id=$key");

    if ($sql) {
        header('location: index.php');
    } else {
        echo 'Gagal Delete';
    }
} else {
    header('location: index.php');
}