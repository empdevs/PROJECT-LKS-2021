<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="kotak-login">

		<form method="POST" action="cek_login.php">
			<h2 class="login">
				login
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
					<td></td>
					<td></td>
					<td><button class="submit" type="submit">
							login
						</button>

						<button class="reset" type="reset">
							reset
						</button></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><?php


						// $pesan = $_GET['pesan'];	


						if(!isset($_GET['pesan'])){
							echo "";
						}else {
								$pesan = $_GET['pesan'];

									if($pesan == "logout"){
										echo "<p>anda berhasil logout </p>";
									} else if ($pesan == "belum") {
										echo "<p>anda belum login</p>";
									} elseif ($pesan == "gagal") {
										echo "<p> username atau password anda salah </p>";
									} elseif ($pesan == "silahkan") {
										echo "<p>berhasil mendaftar, silahkan login </p>";
									} elseif ($pesan == "") {
										echo "<p> username atau password anda salah </p>";
									}
						}
						?>
						</td>
				</tr>
			</table>
			


		</form>
		
	</div>
	
</body>

</html>