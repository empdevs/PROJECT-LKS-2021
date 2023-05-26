<!DOCTYPE html>
<html>
<head>
	<title>Ayo Vaksinasi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $data['site']?>/assets/styles/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header id="header">
		<div class="header-left">
			<a class="logo">AyoVaksin</a>
			<button id="toggle" class="toggle-button">
				<img id="img-toggle" width="25" height="25" src="<?php echo $data['site']?>/assets/images/hamburger.png?>"/>
			</button>
		</div>
		<nav id="nav">
			<a href="<?php echo $data['site']?>/index.php" class="menu-item">Beranda</a>
			<a href="<?php echo $data['site']?>/list-faskes.php" class="menu-item">Fasilitas Kesehatan</a>
			<?php
			if(isset($_SESSION['user'])){
				if($_SESSION['user']['level'] == 'admin'){
			?>
				<a href="<?php echo $data['site']?>/admin/user.php" class="menu-item">List User</a>
				<a href="<?php echo $data['site']?>/list-faskes.php" class="menu-item">List Faskes</a>
				<a href="<?php echo $data['site']?>/profile.php" class="menu-item">
					<img src="<?php echo $data['site'] ?>/assets/images/<?php echo $_SESSION['user']['img']?>" class="img-avatar img-rounded"> <?php echo $_SESSION['user']['nama_depan']?> <?php echo $_SESSION['user']['nama_belakang']?> </a>

			<?php

				} else {
			?>
				<a href="<?php echo $data['site']?>/dashboard.php" class="menu-item">Dashboard</a>
				<a href="<?php echo $data['site']?>/profile.php" class="menu-item">
					<img src="<?php echo $data['site'] ?>/assets/images/<?php echo $_SESSION['user']['img']?>" class="img-avatar img-rounded"> <?php echo $_SESSION['user']['nama_depan']?> <?php echo $_SESSION['user']['nama_belakang']?> </a>
			<?php
				}
			} else {
				?>
			<a href="<?php echo $data['site']?>/login.php" class="menu-item">Masuk</a>
			<a href="<?php echo $data['site']?>/register.php" class="menu-item">Daftar</a>
				<?php
			}
			?>
		</nav>
	</header>