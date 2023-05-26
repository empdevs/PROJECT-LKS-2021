<?php

session_start();
	if(!isset($_SESSION['login'])){
		header("location:../index.php?pesan=belum");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
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


		
		<form method="POST" action="cek_edit.php">

			<?php
				include 'config.php';
				$id = $_GET['id'];


				$cek = mysqli_query($conn,"SELECT * FROM data WHERE id='$id' ");

				$cek2 = mysqli_num_rows($cek);

				if(!$cek2 > 0){
					header("location:index.php");
				} 

				$result = mysqli_query($conn,"SELECT * FROM data WHERE id='$id' ");

				while ($d = mysqli_fetch_array($result)) {
					# co$de...
				

				 ?>
			
		<table class="">
				<tr>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<td>username</td>
					<td>:</td>
					<td><input value="<?php echo $d['username'] ?>" type="text" name="username" required></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input value="<?php echo $d['password'] ?>" type="text" name="password" required></td>
				</tr>
				<tr>
					<td>nama depan</td>
					<td>:</td>
					<td><input value="<?php echo $d['nama_depan'] ?>" type="text" name="nama_depan" required></td>
				</tr>
				<tr>
					<td>nama keluarga</td>
					<td>:</td>
					<td><input value="<?php echo $d['nama_keluarga'] ?>" type="text" name="nama_keluarga" required></td>
				</tr>
				<tr>
					<td>nik</td>
					<td>:</td>
					<td><input value="<?php echo $d['nik'] ?>" type="number" name="nik" required></td>
				</tr>
				<tr>
					<td>umur</td>
					<td>:</td>
					<td><input value="<?php echo $d['umur'] ?>" type="number" name="umur" required></td>
				</tr>
				<tr>
					<td>telepon</td>
					<td>:</td>
					<td><input value="<?php echo $d['telepon'] ?>" type="number" name="telepon" required></td>
				</tr>
				<tr>
					<td>alamat email</td>
					<td>:</td>
					<td><input value="<?php echo $d['alamat_email'] ?>" type="email" name="alamat_email" required></input></td>
				</tr>
				<tr>
					<td>alamat</td>
					<td>:</td>
					<td><input value="<?php echo $d['alamat'] ?>" name="alamat" required></input></td>
				</tr>
				<tr>
					<td>kota</td>
					<td>:</td>
					<td><input value="<?php echo $d['kota'] ?>" type="text" name="kota" required></td>
				</tr>
				<tr>
					<td>provinsi</td>
					<td>:</td>
					<td><input value="<?php echo $d['provinsi'] ?>" type="text" name="provinsi" required></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<a href=""><button class="submit" type="submit">
							edit
						</button></a>

						<a href=""><button class="reset" type="reset">
							reset
						</button></a>
					</td>
				</tr>

			</table>

	</table>

	<?php } ?>

	</div>

	</form>
	<br>
	<br>

</body>
</html>