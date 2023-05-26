<?php 
	require_once('function/function.php');

	if(isset($_POST["registrasi"])){

		$nama_depan = htmlspecialchars($_POST["nama_depan"]);
		$nama_keluarga = htmlspecialchars($_POST["nama_keluarga"]);
		$nik = $_POST["nik"];
		$umur = $_POST["umur"];
		$telepon = $_POST["telepon"];
		$email = $_POST["email"];
		$alamat = htmlspecialchars($_POST["alamat"]);
		$kota = htmlspecialchars($_POST["kota"]);
		$provinsi = htmlspecialchars($_POST["provinsi"]);
		$role = "user";
		$data = data("SELECT * FROM user");
		foreach ($data as $d) {
			$db_nik = $d["nik"];
			if($nik == $db_nik){
					echo "<script>
						alert('NIK telah digunakan');
						document.location.href='registrasi.php';
					</script>";
				exit;
					
			}
	
		}


		mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama_depan','$nama_keluarga','$nik','$umur','$telepon','$email','$alamat','$kota','$provinsi','$role')");

		echo "<script>
				alert('Anda berhasil registrasi');
				document.location.href='login.php';
			</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="registrasi d-flex justify-content-center align-items-center">
		<div class="container">
			<form action="" method="POST">
				<div class="judul-registrasi text-center text-white">
					<h3>Registrasi Peserta</h3>
				</div>
				<div class="form-control">
					<label class="text-white" id="nama_depan">Nama Depan</label><br>
					<input required type="text" name="nama_depan" id="nama_depan" placeholder="Masukkan nama depan">
				</div>
				<div class="form-control">
					<label id="nama_keluarga" class="text-white">Nama Keluarga</label><br>
					<input required type="text" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan nama keluarga">
				</div>
				<div class="form-control">
					<label class="text-white" id="nik">NIK</label><br>
					<input required type="text" name="nik" id="nik" maxlength="16" placeholder="Masukkan NIK">
				</div>
				<div class="form-control">
					<label id="umur" class="text-white">Umur</label><br>
					<input required type="number" name="umur" id="umur"  placeholder="Masukkan umur">
				</div>
				<div class="form-control">
					<label id="telepon" class="text-white">Telepon</label><br>
					<input required type="text" name="telepon" id="telepon" maxlength="12" placeholder="Masukkan telepon">
				</div>
				<div class="form-control">
					<label id="alamat_email" class="text-white">Alamat Email</label><br>
					<input required type="text" name="email" id="email"  placeholder="Masukkan email">
				</div>
				<div class="form-control">
					<label id="alamat" class="text-white">Alamat</label><br>
					<input required type="text" name="alamat" id="alamat"  placeholder="Masukkan alamat">
				</div>
				<div class="form-control">
					<label id="kota" class="text-white">Kota</label><br>
					<input required type="text" name="kota" id="kota"  placeholder="Masukkan kota">
				</div>
				<div class="form-control">
					<label id="provinsi" class="text-white">Provinsi</label><br>
					<input required type="text" name="provinsi" id="provinsi"  placeholder="Masukkan provinsi">
				</div>
				<div class="button text-right">
					<button class="btn text-white"  type="submit" name="registrasi">Registrasi</button>
				</div>
				<p>Sudah punya akun? login <a href="login.php">disini</a></p>
			</form>
		</div>
	</div>
</body>
</html>