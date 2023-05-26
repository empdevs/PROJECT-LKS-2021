<?php
	require_once('function/function.php');
	session_start();
	if(isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$data = data("SELECT * FROM admin WHERE username = '$username'");
		if($data){
			foreach($data as $d){
				if(!password_verify($password, $d['password'])){
						echo "<script>
							alert('Username atau password yang anda masukkan salah');
							document.location.href='login-admin.php';
						</script>";
						exit;
				}else{
						$_SESSION["login"] = true;
						$_SESSION["username"] = $d["username"];
						$_SESSION["user_id"] = $d["user_id"];
						$_SESSION["role"] = $d["role"];

					echo "<script>
							alert('Login admin Berhasil');
							document.location.href='my_profile.php?page=cek_pendaftaran';
						</script>";
				}
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="registrasi d-flex justify-content-center align-items-center">
		<div class="container">
			<form action="" method="POST">
				<div class="judul-registrasi text-center text-white">
					<h3>LOGIN ADMIN</h3>
				</div>
				<div class="form-control">
					<label class="text-white" id="username">Username</label><br>
					<input required type="text" name="username" id="username" placeholder="Masukkan username">
				</div>
				<div class="form-control">
					<label id="password" class="text-white">Password</label><br>
					<input required type="password" name="password" id="password" placeholder="Masukkan password">
				</div>
				<div class="text-right">
					<button class="btn text-white" type="submit" name="login">Login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>