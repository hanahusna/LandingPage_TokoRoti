<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
	<title>Login For Admin</title>
</head>

<body>
	<div class="container" align="center">
		<?php
		if (isset($_SESSION['error'])) {
		?>
			<div class="alert alert-warning" role="alert">
				<?php echo $_SESSION['error'] ?>
			</div>
		<?php
		}
		?>
		<form action="process.php" method="post" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login For Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" id="username">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form><br>
		<a align="center" href="homepage.php">
          <div class="div btn btn-primary mb-2">
            Kembali
          </div>
        </a>
	</div>
</body>