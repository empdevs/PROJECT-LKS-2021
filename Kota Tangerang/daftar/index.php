<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="kotak-login">

		<form method="POST" action="cek_daftar.php">
			<h2 class="login">
				daftar vaksin
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
					<td>tempat</td>
					<td>:</td>
					<td><select name="tempat" class="select">
						<option value="tangerang"> tangerang</option>
						<option value="serang"> serang </option>
						<option value="kab. tangerang"> kab. tangerang </option>
					</select></td>
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

									if($pesan == "gagal"){
										echo "<p> gagal  </p>";
									}
						}
						?></td>
				</tr>
			</table>
			<button class="submit" type="submit">
							daftar
						</button>

						<button class="reset" type="reset">
							reset
						</button>


		</form>
		
	</div>

</body>
</html>