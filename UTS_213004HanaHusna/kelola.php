<?php
require 'functions.php';
$eat = query("SELECT * FROM eatdrink");
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
    <title>Kelola Data</title>
    <style>
        body, html{
            background-color: lightgray;
            font-family: "Inconsolata", sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 align="center">Kelola Data Halaman Pengunjung</h1>
    <a href="index.php">
        &ensp;
          <div class="div btn btn-primary mb-2">
            Kembali
          </div>
        </a>
    <a href="tambah.php">
        <div class="div btn btn-primary mb-2">
            Tambah Data
          </div>
        </a>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr style="background-color:burlywood;" align="center">
            <th>No</th>
            <th>Gambar</th>
            <th>Makanan/Minuman</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($eat as $row) : ?>
            <tr align="center">
                <td><?= $i; ?></td>
                <td><img src="images/<?= $row["gambar"]; ?>" width="200"></td>
                <td><?= $row["fnb"]; ?></td>
                <td><?= $row["ket"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data yang dipilih?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>