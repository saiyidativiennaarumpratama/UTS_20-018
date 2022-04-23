<?php
include 'koneksi.php';
$nama = $_POST['nama_018'];
$email = $_POST['email_018'];

$sql = "INSERT INTO tbl_018 VALUES (null, '$nama', '$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
	echo "Tambah Data Gagal";	
} else {
	echo "Data Berhasil Ditambah <a href = 'data.php'> Show Data </a>";
}
?>