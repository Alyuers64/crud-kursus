<?php 
require('fungsi.php');

$id = $_GET["id"];
if (hapus_kursus($id) > 0) {
	echo "
				<script>
					alert('Data berhasil dihapus!');
					document.location.href = 'index.php';
				</script>
		";
} else {
	echo "
		<script>
					alert('Data gagal dihapus!');
					document.location.href = 'index.php
				</script>
		";
}
?>