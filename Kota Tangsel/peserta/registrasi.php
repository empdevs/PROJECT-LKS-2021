<?php $a = 2;include '../header.php'; ?>

<?php 

// =======Cek Faskes=======

include '../koneksi.php';
$q_faskes = "SELECT * FROM tb_faskes";
$array_faskes = mysqli_query($koneksi, $q_faskes);

 ?>

<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Registrasi</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			

			<form action="insert_registrasi.php" method="POST">
				<table style="width: 100%;">
					<tr>
						<td>Nama Depan </td>
						<td>:</td>
						<td><input type="text" name="nama_peserta"></td>
					</tr>
					<tr>
						<td>Nama Keluarga </td>
						<td>:</td>
						<td><input required type="text" name="keluarga_peserta"></td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td><input required type="text" name="nik_peserta"></td>
					</tr>
					<tr>
						<td>Umur </td>
						<td>:</td>
						<td><input required type="number" name="umur_peserta"></td>
					</tr>
					<tr>
						<td>Telepon </td>
						<td>:</td>
						<td><input required type="number" name="telepon_peserta"></td>
					</tr>
					<tr>
						<td>Alamat Email </td>
						<td>:</td>
						<td><input required type="email" name="email_peserta"></td>
					</tr>
					<tr>
						<td>Password </td>
						<td>:</td>
						<td><input required type="Password" name="password_peserta"></td>
					</tr>
					<tr>
						<td>Alamat </td>
						<td>:</td>
						<td><textarea name="alamat_peserta"></textarea></td>
					</tr>
					<tr>
						<td>Kota </td>
						<td>:</td>
						<td><input required type="text" name="kota_peserta"></td>
					</tr>
					<tr>
						<td>Provinsi </td>
						<td>:</td>
						<td><input required type="text" name="provinsi_peserta"></td>
					</tr>
					<tr>
						<td>Faskes </td>
						<td>:</td>
						<td>
							<select name="id_faskes">
								<?php foreach ($array_faskes as $d_faskes): ?>
									<option value="<?php echo $d_faskes['id_faskes'] ?>"><?php echo $d_faskes['nama_faskes'] ?></option>
								<?php endforeach ?>
							</select>
						</td>
						
					</tr>
					<tr>
						<td><input type="Submit" name="submit" value="Kirim"></td>
					</tr>
				</table>
			</form>

			
		</div>
	</div>

</div>

<?php $a = 2;include '../footer.php'; ?>