<?php 

require 'functions.php';

$peserta = query("SELECT * FROM peserta");

if( isset($_POST["submit"]) ){
	$peserta = cari($_POST["keyword"]);
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Peserta</title>
</head>
<body>

	<h1>Data Peserta Vaksin</h1>

	<a href="tambah.php">Tambah peserta</a><br><br>

	<form action="" method="post">
		<label for="cari"></label>
		<input type="text" name="keyword" id="cari">
		<button type="submit" name="cari">Cari</button>
	</form>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Edit</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Umur</th>
			<th>Telepon</th>
			<th>Email</th>
		</tr>


		<?php $i = 1; ?>
		<?php foreach($peserta as $row) : ?>	
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row['id'] ?>">ubah</a> |
					<a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapusnya?')">hapus</a>
				</td>
				<td><img src="../img/user/<?= $row['gambar']; ?>"></td>		
				<td><?= $row['nama']; ?></td>		
				<td><?= $row['nik']; ?></td>		
				<td><?= $row['umur']; ?></td>		
				<td><?= $row['telepon']; ?></td>		
				<td><?= $row['email']; ?></td> 					
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>

</body>
</html>