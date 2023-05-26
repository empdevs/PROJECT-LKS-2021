<?php 

					require_once('function/function.php');
					session_start();
					$login = isset($_SESSION["login"])?$_SESSION["login"]:false;
					$user_id=isset($_SESSION["user_id"])?$_SESSION["user_id"]:false;
					$nama_keluarga=isset($_SESSION["nama_keluarga"])?$_SESSION["nama_keluarga"]:false;
					$role=isset($_SESSION["role"])?$_SESSION["role"]:false;
					$username=isset($_SESSION["username"])?$_SESSION["username"]:false;
					if(empty($login)){
						header("Location: index.php");
						exit;
					}
				$page = isset($_GET["page"])?$_GET["page"]:false;
				$action = isset($_GET["action"])?$_GET["action"]:false;

					
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
				<div class="judul text-white text-center">
					<h1>Sistem Informasi Pelayanan Vaksinasi</h1>
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
				<?php if($user_id): ?>
					<div class="d-flex">
						<?php if($role == "admin"):?>
							<div>
								<p class="text-white username">Hai <?= $username;?></p>
							</div>
							<div class="btn-my-profile">
								<a href="my_profile.php?page=peserta">My Profile</a>
							</div>
						<?php else: ?>
							<div>
								<p class="text-white username">Hai <?= $nama_keluarga;?></p>
							</div>
							<div  class="btn-my-profile">
								<a href="my_profile.php?page=pendaftaran">My Profile</a>
							</div>
						<?php endif; ?>
						<div class="logout ">
							<a class="text-white" href="logout.php">Logout</a>
						</div>
					</div>
				<?php else: ?>
					<div class="login-registrasi ">
						<div class="login-link">
							<a class="text-decoration-none text-white" href="login.php">Login</a>
						</div>
						<div class="registrasi-link">
							<a class="text-decoration-none text-white" href="registrasi.php">Registrasi</a>
						</div>
					</div>
			<?php endif; ?>
			</div>
			<div class="konten d-flex flex-wrap">
				<div class="kiri">
					<ul>
						<?php if($role == "admin"): ?>
							<li class="<?php if($page == 'peserta'){ echo 'active';} ?>">
								<a class="text-white" href="my_profile.php?page=peserta">Terdaftar</a>
							</li>
							<li class="<?php if($page == 'user'){ echo 'active';} ?>">
								<a class="text-white" href="my_profile.php?page=user">Peserta Vaksinasi</a>
							</li>
						<?php else:?>
							<li  class="<?php if($page == 'pendaftaran'){ echo 'active';} ?>">
								<a class="text-white" href="my_profile.php?page=pendaftaran">Pendaftaran</a>
							</li>
							<li  class="<?php if($page == 'cek_pendaftaran'){ echo 'active';} ?>">
								<a class="text-white" href="my_profile.php?page=cek_pendaftaran">Cek pendaftaran</a>
							</li>
						<?php endif;?>
					</ul>
				</div>
				<div class="kanan">
					 <?php if($page && $action): ?>
					 		<?php require_once("page/$page/$action".".php"); ?>
					<?php elseif($page): ?>
						<?php require_once("page/$page/$page".".php"); ?>
					<?php else: ?>
							<h1>Halaman Tidak ditemukan</h1>
					<?php endif ?>
				</div>
			</div>
			<div class="footer text-white">
				& copy LKS PROVINSI
			</div>
		</div>
	</div>


</body>
</html>