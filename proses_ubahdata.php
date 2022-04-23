<?php 
include 'koneksi.php';
$id = $_POST['id_018'];
$nama = $_POST['nama_018'];
$email = $_POST['email_018'];

$sql = "UPDATE tbl_018 set nama_018='$nama',email_018='$email' WHERE id_018=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
	echo "Gagal";
} else{
	echo "Data Berhasil Diedit <a href = 'data.php'> Show Data </a>";
}
?>