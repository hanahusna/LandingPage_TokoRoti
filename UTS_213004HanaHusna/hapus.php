<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('Data berhasil dihapus!');
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
?>