<?php
require 'setting.php';
$sql = mysqli_query($koneksi, "SELECT * FROM barang");
?>

<!doctype html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="../P7/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-primary">Data Barang</h2>
    <hr>
    <a href="insert.php" class="btn btn-primary">Tambah Data</a>
    <hr>

    <table border="1" cellspacing='0' class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $no = 1;
        while ($r = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?= $r['nama']; ?></td>
                <td><?php echo $r['harga']; ?></td>
                <td><?php echo $r['stok']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $r['id']; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Anda Yakin ?')">Delete
                    </a>
                    <a href="update.php?key=<?php echo $r['id']; ?>"
                       class="btn btn-warning btn-sm">Update
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>