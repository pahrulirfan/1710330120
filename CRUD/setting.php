<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'web-1';
$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) {
    echo 'Koneksi Gagal' . mysqli_error($koneksi);
}