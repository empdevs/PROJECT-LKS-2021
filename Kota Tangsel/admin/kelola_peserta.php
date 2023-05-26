<?php 
session_start();
if (@!$_SESSION['id_admin']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{
	include ('../koneksi.php');
	$q = "SELECT * FROM tb_peserta LEFT JOIN tb_faskes ON tb_peserta.id_faskes = tb_faskes.id_faskes";
	$array = mysqli_query($koneksi, $q);
?>


<?php $a = 2;include '../header_admin.php'; ?>
<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Kelola Peserta</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">

		<p>
			<a href="./tambah_peserta.php">Tambah</a>
		</p>

		<table style="width: 100%;">
			<thead>
				<td>Nama Depan </td>
				<td>Nama Keluarga </td>
				<td>NIK</td>
				<td>Umur </td>
				<td>Telepon </td>
				<td>Alamat Email </td>
				<td>Alamat </td>
				<td>Kota </td>
				<td>Provinsi </td>
				<td>faskes</td>
				<td>status</td>
				<td>jadwal</td>
				<td>Kelola</td>
			</thead>

			<?php foreach ($array as $d_array): ?>
				<?php 
				if ($d_array['status_peserta'] == 1) {
					$status = "Selesai";
				} elseif($d_array['status_peserta'] == 0) {
					$status = "Diproses";
				}

				$id_peserta = $d_array['id_peserta'];

				?>

				<tr>
					<td><?php echo $d_array['nama_peserta'] ?></td>
					<td><?php echo $d_array['keluarga_peserta'] ?></td>
					<td><?php echo $d_array['nik_peserta'] ?></td>
					<td><?php echo $d_array['umur_peserta'] ?></td>
					<td><?php echo $d_array['telepon_peserta'] ?></td>
					<td><?php echo $d_array['email_peserta'] ?></td>
					<td><?php echo substr($d_array['alamat_peserta'], 1, 100) ?>...</td>
					<td><?php echo $d_array['kota_peserta'] ?></td>
					<td><?php echo $d_array['provinsi_peserta'] ?></td>
					<td><?php echo $d_array['nama_faskes'] ?></td>
					<td><?php echo $status ?></td>
					<td><?php echo $d_array['jadwal_peserta'] ?></td>
					<td><a href="./ubah_peserta.php?id_peserta=<?php echo $id_peserta ?>" style="margin-right: 10px;">Ubah</a><a href="./hapus_peserta.php?id_peserta=<?php echo $id_peserta ?>" style="color:red;">Hapus</a></td>
				</tr>
				
			<?php endforeach ?>
		</table>


		</div>
	</div>

</div>

<?php $a = 2;include '../footer.php'; ?>

<?php } ?>