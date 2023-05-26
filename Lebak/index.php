<?php 

					require_once('function/function.php');
					session_start();
					$login = isset($_SESSION["login"])?$_SESSION["login"]:false;
					$user_id=isset($_SESSION["user_id"])?$_SESSION["user_id"]:false;
					$nama_keluarga=isset($_SESSION["nama_keluarga"])?$_SESSION["nama_keluarga"]:false;
					$role=isset($_SESSION["role"])?$_SESSION["role"]:false;
					$username=isset($_SESSION["username"])?$_SESSION["username"]:false;

					$page = isset($_GET["page"])?$_GET["page"]:false;

					$peserta_vaksin = data("SELECT COUNT(user_id) FROM user");
					foreach ($peserta_vaksin as $pv) {
						$count_peserta_vaksin = $pv["COUNT(user_id)"];
					}
					$puskesmas = data("SELECT COUNT(puskesmas_id) FROM puskesmas");
					foreach ($puskesmas as $p) {
						$count_puskesmas = $p["COUNT(puskesmas_id)"];
					}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Vaksinasi</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="main d-flex justify-content-center align-items-center">
		<div class="container">
				<div class="judul d-flex align-items-center">
					<div class="text-white text-center">
						<h1>Sistem Informasi Pelayanan Vaksinasi</h1>
					</div>
				</div>
				<div class="menu">
						<ul class="d-flex">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="informasi_vaksin.php">Informasi Vaksin</a>
							</li>
							<li>
								<a href="peta_situs.php">Peta Situs</a>
							</li>
							<li>
								<a href="hubui_kami.php">Hubungi Kami</a>
							</li>
						</ul>
					</div>
			<div class="header">
				<div class="login-registrasi d-flex">
					<?php if($user_id):?>
						<div class="d-flex">
						<?php if($role == "admin"):?>
							<div>
								<p class="text-white username">Hai <?= $username;?></p>
							</div>
							<div class="btn-my-profile">
								<a href="my_profile.php?page=pendaftaran">My Profile</a>
							</div>
						<?php else: ?>
							<div>
								<p class="text-white username">Hai <?= $nama_keluarga;?></p>
							</div>
							<div  class="btn-my-profile">
								<a href="my_profile.php?page=pendaftaran">My Profile</a>
							</div>
						<?php endif; ?>
						<div class="logout">
							<a class="text-white" href="logout.php">Logout</a>
						</div>
					</div>
					<?php else: ?>
							<div class="login-link">
								<a class="text-decoration-none text-white" href="login.php">Login Peserta</a>
							</div>
							<div class="registrasi-link">
								<a class="text-decoration-none text-white" href="registrasi.php">Registrasi</a>
							</div>
							<div class="registrasi-link login-admin">
								<a class="text-decoration-none text-white" href="login-admin.php">Login Admin</a>
							</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="konten d-flex flex-wrap justify-content-center">
				<div class="banner">
					<div class="gambar1 d-flex align-items-center">
						<img src="images/user.png" style="width: 100px; height: 100px; margin-right: 5px; margin-bottom: 5px;">
						<h5 class="text-white">Jumlah peserta vaksin<br>yang terdaftar <?=$count_peserta_vaksin;?> </h5>
					</div>
				</div>
				<div class="banner">
					<div class="gambar2 d-flex align-items-center">
						<img class="img-rounded" src="images/vaccine - Covid-19.png" style="width: 100px; height: 100px; margin-right: 5px;
						margin-bottom: 5px;">
						<h5 class="text-white">Jumlah faskes vaksin yang terdaftar <?=$count_puskesmas;?> </h5>
					</div>
				</div>
				<div class="banner">
					<div class="gambar3 d-flex align-items-center">
						<img class="img-rounded" src="images/keluarga.jpg" style="width: 100px; height: 100px; margin-right: 5px; margin-bottom: 5px;">
						<h5 class="text-white">Ayo ajak keluarga anda<br>untuk vaksin silahkan daftar <a href="registrasi.php">Disini</a></h5>
					</div>
				</div>
				<div class="banner">
					<div class="gambar4 d-flex align-items-center">
						<img class="img-rounded" src="images/covid.jpg" style="width: 100px; height: 100px; margin-right: 5px; margin-bottom: 5px;">
						<h5 class="text-white">Ayo vaksin sekarang, cek jadwal <br> dan faskes terdekat <br> silahkan login <a href="registrasi.php">Disini</a></h5>
					</div>
				</div>
			</div>
			<div class="footer text-white">
				& copy LKS PROVINSI
			</div>
		</div>
	</div>


</body>
</html>