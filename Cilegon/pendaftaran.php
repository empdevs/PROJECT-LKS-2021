<?php

require 'admin/functions.php';





if( isset($_POST["submit"])) {


	if( daftar($_POST) > 0 ){
		echo "
			<script>
				alert('Berhasil mendaftar');
				document.location.href = 'data_pendaftar.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Tidak berhasil mendaftar');
				document.location.href = 'data_pendaftar.php';
			</script>

		";
	}




}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<style>
		form ul li {
			list-style: none;
			margin-bottom: 15px;

		}

		.container {
			width: 100%;
			margin: 150px auto;

		}

		nav {
			background-color: #fff;
			padding: 40px;
			display: flex;
			justify-content: space-around;
			align-items: center;
			box-shadow: 0px 1px 2px #999;

		}

		nav img {
			margin-left: -100px;
		}


		nav ul {
			display: flex;
		}

		nav ul li {
			list-style-type: none;
			padding-right: 40px;
		}

		nav ul li a {
			color: black;
			text-decoration: none;
		}
		nav ul li a:hover {
			text-decoration: underline;
		}

		h1 {
			text-align: center;
		}

		button {
			padding: 5px 15px 5px 15px;
		}

		label {
			display: block;
		}



	</style> 
</head>
<body>


	<nav>
		<a href="index.php"><img src="img/ikon/images/bantenlogo.png" width="40"></a>
		<ul>
			<li><a href="informasi.html">Detail</a></li>
			<li><a href="#">Situs</a></li>
			<li><a href="kontak.html">Kontak</a></li>
			<li><a href="#">Daftar</a></li>
		</ul>
	</nav>

	<h1>Forum Registrasi</h1>




	<div class="container">
		<form action="data_pendaftar.php" method="post">
			<ul>
				<li>
					<label for="nama">Nama depan :</label>
					<input type="text" name="nama-depan" id="nama" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="nama">Nama belakang :</label>
					<input type="text" name="nama-belakang" id="nama" autocomplete="off" autocomplete="off">
				</li>
				<li>
					<label for="nik">NIK :</label>
					<input type="text" name="nik" id="nik" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="umur">Umur :</label>
					<input type="text" name="umur" id="umur" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="telepon">Telepon :</label>
					<input type="text" name="telepon" id="telepon" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="email">Email :</label>
					<input type="text" name="email" id="email" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="alamat">Alamat :</label>
					<input type="text" name="alamat" id="alamat" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="kota">Kota :</label>
					<input type="text" name="kota" id="kota" autocomplete="off" required autocomplete="off">
				</li>
				<li>
					<label for="provinsi">Provinsi :</label>
					<input type="text" name="provinsi" id="provinsi" autocomplete="off" required>
				</li>
				<button type="submit" name="submit">Kirim!</button>
			</ul>
		</form>

	</div>
	






</body>
</html>