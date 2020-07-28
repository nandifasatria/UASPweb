<?php
	include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PORTOFOLIO GALERI FOTO</title>
	<link rel="stylesheet" type="text/css" href="csshehe.css">
</head>
<body>
	<p align="center">PORTOFOLIO FOTO</p>
	<a href="data.php">foto tersimpan</a>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" /></td>
			</tr>

			<tr>
				<td>File</td>
				<td>:</td>
				<td><input type="file" name="picture" /></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nama_file = $_FILES['picture']['name'];
		$source = $_FILES['picture']['tmp_name'];
		$folder = './upload/';

		move_uploaded_file($source, $folder.$nama_file);
		$insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES (
			NULL,
			'$nama',
			'$nama_file')");

		if ($insert) {
			echo 'Success upload file';
		}else{
			echo 'Error upload file';
		}
	}
	?>
</body>
</html>