<?php 
	require_once('function/function.php');

	if(isset($_POST["tambah"])){

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
		foreach ($data as $d ) {
			$db_nik = $d["nik"];
				if($nik == $db_nik){
					echo "<script>
						alert('NIK telah digunakan');
						document.location.href='my_profile.php?page=user&action=tambah';
					</script>";
				exit;
					
			}
	
		}

		


		mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama_depan','$nama_keluarga','$nik','$umur','$telepon','$email','$alamat','$kota','$provinsi','$role')");

		echo "<script>
				alert('Data berhasil ditambah');
				document.location.href='my_profile.php?page=user';
			</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="edit">
		<div class="container">
			<form action="" method="POST">
				<div class="judul-registrasi text-center text-white">
					<h3>Registrasi Peserta</h3>
				</div>
				<div class="form-control">
					<label  id="nama_depan">Nama Depan</label><br>
					<input required type="text" name="nama_depan" id="nama_depan" placeholder="Masukkan nama depan" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="nama_keluarga" >Nama Keluarga</label><br>
					<input required type="text" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan nama keluarga"style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label  id="nik">NIK</label><br>
					<input required type="text" name="nik" id="nik" maxlength="16" placeholder="Masukkan NIK" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="umur" >Umur</label><br>
					<input required type="number" name="umur" id="umur"  placeholder="Masukkan umur" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="telepon" >Telepon</label><br>
					<input required type="text" name="telepon" id="telepon" maxlength="12" placeholder="Masukkan telepon" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="alamat_email" >Alamat Email</label><br>
					<input required type="text" name="email" id="email"  placeholder="Masukkan email"  style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="alamat" >Alamat</label><br>
					<input required type="text" name="alamat" id="alamat"  placeholder="Masukkan alamat"  style="border: 1px #000000 solid;width: 98%;"> 
				</div>
				<div class="form-control">
					<label id="kota" >Kota</label><br>
					<input required type="text" name="kota" id="kota"  placeholder="Masukkan kota" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="provinsi" >Provinsi</label><br>
					<input required type="text" name="provinsi" id="provinsi"  placeholder="Masukkan provinsi" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="button text-right">
					<button class="btn text-white"  type="submit" name="tambah">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>