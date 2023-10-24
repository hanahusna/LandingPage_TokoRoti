<?php
session_start();

if (empty($_SESSION['login'])) {
	header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Halaman Admin</title>
</head>

<body>
	<div class="container" style="background-image: url(images/sharon-tay-vz36u5iTn38-unsplash.jpg); background-position: center;
    background-size: cover; margin-top:5%;">
		<div class="row">
			<div class="col-md-4 offset-md-4  mt-5">
				<div class="alert alert-success text-center" role="alert">
					Berhasil login ke dalam sistem.
				</div>
				<div class="card" style="margin-bottom: 30%;">
					<div class="card-title text-center">
						<br>
						<h1>Selamat Datang <?php echo $_SESSION['username'] ?>!</h1>
					</div>
					<div class="card-body text-center">
						<h4>Silahkan Pilih Menu Dibawah Ini :</h4><br>
						<center>
							<a href="kelola.php">Kelola Data Halaman Pengunjung</a><br>
							<br><a href="logout.php">Logout</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>