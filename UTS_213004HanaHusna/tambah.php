<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'kelola.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'kelola.php';
			</script>
		";
    }
}
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="crud.css">
<head>
    <title>Tambah Data</title>
</head>

<body>
    <br>
    <h1 align="center">Tambah Data Di Halaman Pengunjung</h1>
    <form action="" method="post">
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required><br><br>
        <label for="fnb">Makanan/Minuman : </label>
        <input type="text" name="fnb" id="fnb"><br><br>
        <label for="ket">Keterangan :</label>
        <input type="text" name="ket" id="ket"><br><br>
        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga"><br><br>
        <button type="submit" name="submit">Tambah Data</button><br><br>
        <a href="kelola.php">
          <div class="div btn btn-primary mb-2">
            Kembali
          </div>
        </a><br><br>
    </form>
</body>
</html>