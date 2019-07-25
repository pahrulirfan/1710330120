<?php
require 'setting.php';
?>
<!doctype html>
<html>
<head>
    <title>Insert Data</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h2>Tambah Data Barang</h2>
<?php
// cek apakah tombol simpan sudah di klik
if (isset($_POST['simpan'])) {
    // proses input data
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok_barang = $_POST['stok_barang'];

    $hasil = mysqli_query($koneksi,
        "INSERT INTO barang VALUES(NULL, '$nama_barang', '$harga_barang', '$stok_barang')");

    if ($hasil) {
        header('location: index.php');
    } else {
        echo 'Gagal : ' . mysqli_error($koneksi);
    }
}
?>

<form action="" method="post">
    <label>Nama Barang</label>
    <input type="text" name="nama_barang">

    <label>Harga Barang</label>
    <input type="number" name="harga_barang">

    <label>Stok</label>
    <input type="number" name="stok_barang">
    <br>
    <input type="submit" name="simpan" value="Simpan">
</form>
</body>
</html>