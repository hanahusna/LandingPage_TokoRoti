<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "menu");

function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$gambar = htmlspecialchars($data["gambar"]);
	$fnb = htmlspecialchars($data["fnb"]);
	$ket = htmlspecialchars($data["ket"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "INSERT INTO eatdrink
				VALUES
			  ('', '$gambar', '$fnb', '$ket', '$harga')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM eatdrink WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$gambar = htmlspecialchars($data["gambar"]);
	$fnb = htmlspecialchars($data["fnb"]);
	$ket = htmlspecialchars($data["ket"]);
	$harga = htmlspecialchars($data["harga"]);

	$query = "UPDATE eatdrink SET
				gambar = '$gambar',
				fnb = '$fnb',
				ket = '$ket',
				harga = '$harga'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);	
}
