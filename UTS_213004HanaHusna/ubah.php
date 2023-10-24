<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data berdasarkan id
$eat = query("SELECT * FROM eatdrink WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'kelola.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
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
	<title>Ubah Data</title>
</head>
<body>
    <br>
	<h1 align="center">Ubah Data Di Halaman Pengunjung</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $eat["id"]; ?>">
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $eat["gambar"]; ?>"><br><br>
				<label for="fnb">Makanan/Minuman : </label>
				<input type="text" name="fnb" id="fnb" value="<?= $eat["fnb"]; ?>"><br><br>
				<label for="ket">Keterangan :</label>
				<input type="text" name="ket" id="ket" value="<?= $eat["ket"]; ?>"><br><br>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" value="<?= $eat["harga"]; ?>"><br><br>
				<button type="submit" name="submit">Ubah Data</button><br><br>
                <a href="kelola.php">
                <div class="div btn btn-primary mb-2">
                    Kembali
                </div>
                </a><br><br>
	</form>
</body>
</html>