<?php 

	$user_id = $_GET["user_id"];
	$peserta = data("SELECT * FROM user WHERE user_id = '$user_id'");

	if(isset($_POST["ubah"])){
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

			mysqli_query($koneksi,"UPDATE user SET nama_depan='$nama_depan',nama_keluarga='$nama_keluarga',nik='$nik',umur='$umur',telepon='$telepon',email='$email',alamat='$alamat',kota='$kota',provinsi='$provinsi',role='$role'");

			echo "<script>
				alert('Data berhasil diubah');
				document.location.href='my_profile.php?page=peserta';
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
	<div class="edit">
		<div class="container">
			<form action="" method="POST">
				<div class="judul-registrasi text-center text-white">
					<h3>Registrasi Peserta</h3>
				</div>
			<?php foreach($peserta as $p): ?>
				<div class="form-control">
					<label  id="nama_depan">Nama Depan</label><br>
					<input required type="text" name="nama_depan" id="nama_depan" placeholder="Masukkan nama depan" value="<?=$p['nama_depan']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="nama_keluarga" >Nama Keluarga</label><br>
					<input required type="text" name="nama_keluarga" id="nama_keluarga" placeholder="Masukkan nama keluarga" value="<?=$p['nama_keluarga']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label  id="nik">NIK</label><br>
					<input required type="text" name="nik" id="nik" maxlength="16" placeholder="Masukkan NIK" value="<?=$p['nik']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="umur" >Umur</label><br>
					<input required type="number" name="umur" id="umur"  placeholder="Masukkan umur" value="<?=$p['umur']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="telepon" >Telepon</label><br>
					<input required type="text" name="telepon" id="telepon" maxlength="12" placeholder="Masukkan telepon" value="<?=$p['telepon']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="alamat_email" >Alamat Email</label><br>
					<input required type="text" name="email" id="email"  placeholder="Masukkan email" value="<?=$p['email']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="alamat" >Alamat</label><br>
					<input required type="text" name="alamat" id="alamat"  placeholder="Masukkan alamat" value="<?=$p['alamat']?>" style="border: 1px #000000 solid;width: 98%;"> 
				</div>
				<div class="form-control">
					<label id="kota" >Kota</label><br>
					<input required type="text" name="kota" id="kota"  placeholder="Masukkan kota" value="<?=$p['kota']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
				<div class="form-control">
					<label id="provinsi" >Provinsi</label><br>
					<input required type="text" name="provinsi" id="provinsi"  placeholder="Masukkan provinsi" value="<?=$p['provinsi']?>" style="border: 1px #000000 solid; width: 98%;">
				</div>
			<?php endforeach; ?>
				<div class="button text-right">
					<button class="btn text-white"  type="submit" name="ubah">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>