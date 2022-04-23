<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM tbl_018 WHERE id_018=$id";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) {
		echo "Data Gagal Di Update";
	}
	?>

	<?php
	while ($row = mysqli_fetch_array($hasil)){

	?>
	<h1>FORM EDIT DATA</h1>
	<form action="proses_ubahdata.php" method="POST">
		
		<input type="hidden" name="id_018" value="<?php echo $row['id_018']?>"><br>
		<label for="nama_018">Nama : </label>
		<input type="text" name="nama_018" value="<?php echo $row['nama_018']?>"><br><br>

		<label for="email_018">Email : </label>
		<input type="text" name="email_018" value="<?php echo $row['email_018']?>"><br><br>	

	
	<button type="submit" value="submit">Update Data</button>
	</form>
<?php }?>
</body>
</html>