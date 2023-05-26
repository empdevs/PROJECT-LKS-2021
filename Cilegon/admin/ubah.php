
<?php

require 'functions.php';

$id = $_GET["id"];


// ambil data

$mhs = query("SELECT * FROM peserta WHERE id = $id")[0];
// print_r($mhs);



if( isset($_POST["submit"])) {


	if( ubah($_POST) > 0 ){
		echo "
			<script>
				alert('data telah diubah');
				document.location.href = 'data.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'data.php';
			</script>

		";
	}




}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		form ul li {
			list-style: none;
		}

	</style>
</head>
<body>

	<h1>Tambah Peserta Vakin</h1>



	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="gambar">Foto :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<label for="nik">NIK :</label>
				<input type="text" name="nik" id="nik" value="<?= $mhs["nik"]; ?>">
			</li>
			<li>
				<label for="umur">Umur :</label>
				<input type="text" name="umur" id="umur" value="<?= $mhs["umur"]; ?>">
			</li>
			<li>
				<label for="telepon">Telepon :</label>
				<input type="text" name="telepon" id="telepon" value="<?= $mhs["telepon"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" autocomplete="off" value="<?= $mhs["email"]; ?>">
			</li>
			<button type="submit" name="submit">Kirim!</button>
		</ul>
	</form>






</body>
</html>