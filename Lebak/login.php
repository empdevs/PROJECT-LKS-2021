<?php 
	require_once('function/function.php');
	session_start();
	if(!empty($login)){
		header("Location: my_profile");
	exit;
					}
	if(isset($_POST["login"])){
		$nik = $_POST["nik"];
		$role = "user";

		$data = data("SELECT * FROM user WHERE nik = '$nik' ");
		if($data){
			foreach ($data as $d) {
				$role = $d["role"];

						$_SESSION["login"] = true;
						$_SESSION["user_id"] = $d["user_id"];
						$_SESSION["nama_keluarga"] = $d["nama_keluarga"];
						$_SESSION["role"] = $d["role"];

						echo "<script>
							alert('Anda berhasil login');
							document.location.href='my_profile.php?page=pendaftaran';
						</script>";
			}
		}else{
			echo "<script>
				alert('Anda belum registrasi');
				document.location.href='registrasi.php';
			</script>";
		}

		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="login d-flex justify-content-center align-items-center">
		<div class="container">
			<form action="" method="POST">
				<div class="judul-login text-center text-white">
					<h3>Login Peserta</h3>
				</div>
				<div class="form-control">
					<label class="text-white" id="nik">NIK</label><br>
					<input required="" type="text" name="nik" id="nik" maxlength="16" placeholder="Masukkan NIK">
				</div>
				<div class="button text-right">
					<button class="btn text-white"  type="submit" name="login">Login</button>
				</div>
				<p>Belum punya akun? daftar <a href="registrasi.php">disini</a></p>
			</form>
		</div>
	</div>
</body>
</html>