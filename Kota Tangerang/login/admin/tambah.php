<?php

session_start();
	if(!isset($_SESSION['login'])){
		header("location:../index.php?pesan=belum");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title></title>
</head>
<body>

	<!-- <div class="brand">
		<div>hello <?php //echo $_SESSION['nama']; ?></div>
		<div>role: <?php //echo $_SESSION['role']; ?></div>
	</div> -->

	<div class="nav">

		<div class="nav-container">
				<div class="nav-brand">
					<div>nama: <?php echo $_SESSION['nama']; ?></div>
				</div>

				<div class="nav-item">
					<div>
						<img src="../../img/bantenlogo.png" width="60px">
					</div>
					<div>
						
					</div>
				</div>

				<div >
					<div class="nav-brand">
						<div>role: <?php echo $_SESSION['role']; ?></div>
					</div>
					<div>
							<a href="logout.php">
								<button class="reset"> logout </button>
							</a>
						</div>
				</div>

		</div>

	</div>
	
	

	<br>
	<br>

	<div class="kotak-login">

		<form method="POST" action="cek_daftar.php">
			<h2 class="login">
				
			</h2>
			<table class="">
				<tr>
					<td>username</td>
					<td>:</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td>nama depan</td>
					<td>:</td>
					<td><input type="text" name="nama_depan" required></td>
				</tr>
				<tr>
					<td>nama keluarga</td>
					<td>:</td>
					<td><input type="text" name="nama_keluarga" required></td>
				</tr>
				<tr>
					<td>nik</td>
					<td>:</td>
					<td><input type="number" name="nik" required></td>
				</tr>
				<tr>
					<td>umur</td>
					<td>:</td>
					<td><input type="number" name="umur" required></td>
				</tr>
				<tr>
					<td>telepon</td>
					<td>:</td>
					<td><input type="number" name="telepon" required></td>
				</tr>
				<tr>
					<td>alamat email</td>
					<td>:</td>
					<td><input type="email" name="alamat_email" required></input></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td><textarea name="alamat" required></textarea></td>
				</tr>
				<tr>
					<td>kota</td>
					<td>:</td>
					<td><input type="text" name="kota" required></td>
				</tr>
				<tr>
					<td>provinsi</td>
					<td>:</td>
					<td><input type="text" name="provinsi" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button class="submit" type="submit">
							daftar
						</button>

						<button class="reset" type="reset">
							reset
						</button></td>

				</tr>
			</table>
			


		</form>
		
	</div>



	</div>
	<br>
	<br>


</body>
</html>