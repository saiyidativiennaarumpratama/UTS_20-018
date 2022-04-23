<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_vienna";

$koneksi = mysqli_connect($server, $user, $password, $database);
if (!$koneksi) {
	echo "Koneksi Tidak Berhasil";

}
	
?>