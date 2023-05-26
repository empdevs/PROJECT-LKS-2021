
<?php

require 'functions.php';


if( isset($_POST["submit"])) {


	if( tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data telah ditambahkan');
				document.location.href = 'data.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'data.php';
			</script>

		";
	}




}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Peserta</title>
	<style>
		form ul li {
			list-style: none;
		}

		ul li {
			padding: 20px;
		}

		label {
			display: block;
		}
	</style>
</head>
<body>

	<h1>Tambah Peserta Vaksin</h1>



	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" autocomplete="off" required>
			</li>
			<li>
				<label for="gambar">Foto :</label>
				<input type="text" name="gambar" id="gambar" autocomplete="off" required>
			</li>
			<li>
				<label for="nik">NIK :</label>
				<input type="text" name="nik" id="nik" autocomplete="off" required>
			</li>
			<li>
				<label for="umur">Umur :</label>
				<input type="text" name="umur" id="umur" autocomplete="off" required>
			</li>
			<li>
				<label for="telepon">Telepon :</label>
				<input type="text" name="telepon" id="telepon" autocomplete="off" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" autocomplete="off" required>
			</li>
			<button type="submit" name="submit">Kirim!</button>
		</ul>
	</form>






</body>
</html>