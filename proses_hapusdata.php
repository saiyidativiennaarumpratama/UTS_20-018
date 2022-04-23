<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM tbl_018 WHERE id_018=$id";
	$hasil = mysqli_query ($koneksi, $sql);
	if (!$hasil) {
		echo "Gagal";
	}else{
		echo "Data Berhasil Dihapus <a href = 'data.php'> Show Data </a>";
	}
?>