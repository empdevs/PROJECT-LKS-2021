<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>

	<style type="text/css">

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: arial;
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


		.container {
			width: 80%;
			background-color: #fff;
			margin: 100px auto;
			border-radius: .4rem;
			padding: 20px;
			box-shadow: 2px 2px 3px #999;
			font-size: 20px;
		}

		.container ul li {
			list-style: none;
		}

		h1 {
			margin-top: 15px;
		}



	</style>
</head>
<body>

	<script>
		
		alert('Telah berhasil terdaftar');

	</script>

	<nav>
		<a href="index.php"><img src="img/ikon/images/bantenlogo.png" width="40"></a>
		<ul>
			<li><a href="informasi.html">Detail</a></li>
			<li><a href="#">Situs</a></li>
			<li><a href="kontak.html">Kontak</a></li>
			<li><a href="#">Daftar</a></li>
		</ul>
	</nav>


	<h1>Data Pendaftar</h1>



	<div class="container">


			<ul>
				<li>Nama depan :<?= $_POST["nama-depan"]; ?></li>
				<br><br>
				<li>Nama belakang : <?= $_POST["nama-belakang"]; ?></li>
				<br><br>
				<li>NIK : <?= $_POST["nik"]; ?></li>
				<br><br>
				<li>Umur : <?= $_POST["umur"]; ?></li>
				<br><br>
				<li>Telepon : <?= $_POST["telepon"]; ?></li>
				<br><br>
				<li>Email : <?= $_POST["email"];?></li>
				<br><br>
				<li>Alamat : <?= $_POST["alamat"]; ?></li>
				<br><br>
				<li>Kota : <?= $_POST["kota"]; ?></li>
				<br><br>
				<li>Provinsi : <?= $_POST["provinsi"]; ?></li>
			</ul>
	</div>

</body>
</html>