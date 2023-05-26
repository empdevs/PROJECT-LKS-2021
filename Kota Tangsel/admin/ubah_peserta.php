<?php 
session_start();
if (@!$_SESSION['id_admin']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{

	include ('../koneksi.php');

	$id_peserta = mysqli_escape_string($koneksi, $_GET['id_peserta']);
	$q = "SELECT * FROM tb_peserta WHERE id_peserta = $id_peserta";
	$array = mysqli_fetch_assoc(mysqli_query($koneksi, $q));

	$q_faskes = "SELECT * FROM tb_faskes";
	$array_faskes = mysqli_query($koneksi, $q_faskes);

	$q_faskes_terpilih = "SELECT * FROM tb_peserta LEFT JOIN tb_faskes ON tb_peserta.id_faskes = tb_faskes.id_faskes WHERE id_peserta = $id_peserta";
	$a_faskes_terpilih = mysqli_fetch_assoc(mysqli_query($koneksi, $q_faskes_terpilih));


?>

<?php $a = 2;include '../header_admin.php'; ?>
<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Ubah Peserta</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
		<form action="proses_ubah_peserta.php" method="POST">
			<table style="width:100%;">
				<tr>
					<td>Nama Depan </td>
					<td>:</td>
					<td><input type="text" name="nama_peserta" value="<?php echo $array['nama_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Nama Keluarga </td>
					<td>:</td>
					<td><input required type="text" name="keluarga_peserta" value="<?php echo $array['keluarga_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><input required type="text" name="nik_peserta" value="<?php echo $array['nik_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Umur </td>
					<td>:</td>
					<td><input required type="number" name="umur_peserta" value="<?php echo $array['umur_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Telepon </td>
					<td>:</td>
					<td><input required type="number" name="telepon_peserta" value="<?php echo $array['telepon_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Alamat Email </td>
					<td>:</td>
					<td><input required type="email" name="email_peserta" value="<?php echo $array['email_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Password </td>
					<td>:</td>
					<td><input type="password" name="password_peserta" value=""></td>
				</tr>
				<tr>
					<td>Alamat </td>
					<td>:</td>
					<td><textarea name="alamat_peserta"><?php echo $array['alamat_peserta'] ?></textarea></td>
				</tr>
				<tr>
					<td>Kota </td>
					<td>:</td>
					<td><input required type="text" name="kota_peserta" value="<?php echo $array['kota_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Provinsi </td>
					<td>:</td>
					<td><input required type="text" name="provinsi_peserta" value="<?php echo $array['provinsi_peserta'] ?>"></td>
				</tr>
				<tr>
					<td>Faskes </td>
					<td>:</td>
					<td>
						<select name="id_faskes">
							<option value="<?php echo $a_faskes_terpilih['id_faskes'] ?>"><?php echo $a_faskes_terpilih['nama_faskes'] ?></option>
							<?php foreach ($array_faskes as $d_faskes): ?>
								<option value="<?php echo $d_faskes['id_faskes'] ?>"><?php echo $d_faskes['nama_faskes'] ?></option>
							<?php endforeach ?>
						</select>
					</td>
					
				</tr>
				
				<tr>
					<td>Status Peserta</td>
					<td>:</td>
					<td>
						<select name="status_peserta">
							<option value="0">Diproses</option>
							<option value="1">Selesai</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jadwal Peserta</td>
					<td>:</td>
					<td>
						<input type="date" name="jadwal_peserta"><!-- ========= -->
					</td>
				</tr>
				<tr>
					<td>
						<input type="number" name="id_peserta" style="display:none;"value="<?php echo $array['id_peserta'] ?>">
						<input type="Submit" name="submit" value="Ubah">
					</td>
					<td><a href="./kelola_peserta.php">Batal</a></td>
				</tr>
			</table>
		</form>
		</div>
	</div>

</div>
<?php $a = 2;include '../footer.php'; ?>




<?php } ?>