<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Data</title>
	<style type="text/css">
        body{
            font-family: cursive;
            background-color: linen;
        }
    </style>
</head>
<body>
	<div class="container">
	<h1 align="center">DATA</h1>
	<table  class="table table-striped table-danger">
		<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">Action</th>
		</tr>
		</thead>

		<tbody>
			<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM tbl_018";
			$hasil = mysqli_query($koneksi, $sql);
			while ($row = mysqli_fetch_array($hasil)) {
			
			
			?>

			<tr>
				<td><?php echo $row["id_018"];?></td>
				<td><?php echo $row["nama_018"];?></td>
				<td><?php echo $row["email_018"];?></td>
				<td>
					<a class="btn btn-sm btn-primary" href="form_ubahdata.php?id=<?=$row["id_018"]?>">Update </a>
					<a class="btn btn-sm btn-danger"  href="proses_hapusdata.php?id=<?=$row["id_018"]?>">Delete</a>
				</td>
			</tr>
		</tbody>
	</div>
	<?php } ?>
	</table>
	<a href="form_tambahdata.php">Tambah Data</a>
</body>
</html>