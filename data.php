<?php
	include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" type="text/css" href="csshehe.css">
</head>
<body>
	<h2>FOTO</h2>
	<a href="index.php">Ingin menambah foto</a>
	<table border="1">
		<tr>
			<td>No</td>
			<td>NAMA</td>
			<td>FOTO</td>
			<td>HAPUS FOTO</td>
		</tr>
		<?php
		$query = mysqli_query($conn, "SELECT * FROM tb_gambar");
		while($row = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['id_gambar'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><img src="upload/<?php echo $row['file'] ?>" width="300px" height="300px"></td>
			<td>
				<a href="hapusgambar.php?id=<?php echo $row['id_gambar'] ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>