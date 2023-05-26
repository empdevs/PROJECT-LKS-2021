<?php 
session_start();
if (@!$_SESSION['id_peserta']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{

include ('../koneksi.php');

	$id_peserta = mysqli_escape_string($koneksi, $_SESSION['id_peserta']);
	$q = "SELECT * FROM tb_peserta LEFT JOIN tb_faskes ON tb_peserta.id_faskes = tb_faskes.id_faskes LEFT JOIN tb_kecamatan ON tb_faskes.id_kecamatan = tb_kecamatan.id_kecamatan WHERE id_peserta = $id_peserta";
	$array = mysqli_fetch_assoc(mysqli_query($koneksi, $q));

 ?>


<?php $a = 2;include '../header.php'; ?>
<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Selamat Datang, </h1>
	    </div>
	  </div>
	</div>


	<div class="row">
		<div class="large-12 column">
			<h2>Waktu & Tempat Vaksinasi</h2>
			<p class="alert-box">Waktu & Tempat Vaksinasi Anda Adalah : <?php echo $array['jadwal_peserta'] ?> di Faskes <?php echo $array['nama_faskes'] ?> Kecamatan <?php echo $array['nama_kecamatan'] ?></p>
			
		</div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<h2>Data Anda</h2>
		<table style="width: 100%;">
			<tr>
				<td>Nama Depan </td>
				<td>:</td>
				<td><input disabled type="text" name="nama_peserta" value="<?php echo $array['nama_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Keluarga </td>
				<td>:</td>
				<td><input disabled required type="text" name="keluarga_peserta" value="<?php echo $array['keluarga_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input disabled required type="text" name="nik_peserta" value="<?php echo $array['nik_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>Umur </td>
				<td>:</td>
				<td><input disabled required type="number" name="umur_peserta" value="<?php echo $array['umur_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>Telepon </td>
				<td>:</td>
				<td><input disabled required type="number" name="telepon_peserta" value="<?php echo $array['telepon_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat Email </td>
				<td>:</td>
				<td><input disabled required type="email" name="email_peserta" value="<?php echo $array['email_peserta'] ?>"></td>
			</tr>
			<tr>
<!-- 
			<form>
				
			</form>
				<td>Password </td>
				<td>:</td>
				<td><input type="password" name="password_peserta" value=""></td>
			</tr> -->
			<tr>
				<td>Alamat </td>
				<td>:</td>
				<td><textarea disabled name="alamat_peserta"><?php echo $array['alamat_peserta'] ?></textarea></td>
			</tr>
			<tr>
				<td>Kota </td>
				<td>:</td>
				<td><input disabled required type="text" name="kota_peserta" value="<?php echo $array['kota_peserta'] ?>"></td>
			</tr>
			<tr>
				<td>Provinsi </td>
				<td>:</td>
				<td><input disabled required type="text" name="provinsi_peserta" value="<?php echo $array['provinsi_peserta'] ?>"></td>
			</tr>
		</table>
		<p class="alert-box warning">Apabila ada kesalahan data, silahkan kontak admin</p>
		</div>
	</div>




</div>

<?php $a = 2;include '../footer.php'; ?>

<?php } ?>