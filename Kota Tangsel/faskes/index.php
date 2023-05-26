<?php 

include "../koneksi.php";

$q_kec = "SELECT * FROM tb_kecamatan";
$array_kec = mysqli_query($koneksi, $q_kec);

$q_faskes = "SELECT * FROM tb_faskes LEFT JOIN tb_kecamatan ON tb_faskes.id_kecamatan = tb_kecamatan.id_kecamatan;";
$a_faskes = mysqli_query($koneksi, $q_faskes);

?>

<?php include "../stats.php" ?>

<?php $a = 2;include '../header.php'; ?>



<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Fasilitas Kesehatan</h1>
	      <p class="alert-box">total peserta vaksin yang terdaftar : <?php echo $total_peserta ?> | Jumlah faskes yang terdaftar : <?php echo $total_faskes ?> | Jumlah peserta divaksin : <?php echo $peserta_divaksin ?> | Jumlah peserta menunggu divaksin : <?php echo $peserta_menunggu_divaksin ?></p>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<h2>Cari Data Faskes</h2>
			<div class="row">
				<form action="cari_faskes.php" method="POST">
					<div class="large-8 column">
						<input type="text" name="kata_kunci" placeholder="Cari Faskes">	
					</div>
					<div class="large-4 column">
						<form>
							<input type="submit" name="" value="Cari" class="button">
						</form>
					</div>
				</form>
				<form action="cari_faskes.php" method="POST">
					<div class="large-8 column">
					<select name="nama_kecamatan">
						<?php foreach ($array_kec as $d_kec): ?>
							<option value="<?php echo $d_kec['nama_kecamatan'] ?>"><?php echo $d_kec['nama_kecamatan'] ?></option>
						<?php endforeach ?>
					</select>
					</div>
					<div class="large-4 column">
						<form>
							<input type="submit" name="" value="Cari" class="button">
						</form>
					</div>
				</form>

				<table style="width:100%;">
					<tr>
						<td>Nama Faskes</td>
						<td>Kecamatan Faskes</td>
						<td>Alamat Faskes</td>
						<td>Kuota Faskes</td>
					</tr>
					<?php foreach ($a_faskes as $d): ?>
						<?php 
							$id_faskes = $d['id_faskes'];
							$q = "SELECT * FROM tb_peserta WHERE id_faskes = $id_faskes";
							$pendaftar_faskes = mysqli_num_rows(mysqli_query($koneksi, $q));
							$a_kuota_faskes = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_faskes WHERE id_faskes = $id_faskes"));
							$kuota_faskes = $a_kuota_faskes['kuota_faskes'];

						 ?>
						<tr>
							<td><?php echo $d['nama_faskes'] ?></td>
							<td><?php echo $d['nama_kecamatan'] ?></td>
							<td><?php echo $d['alamat_faskes'] ?></td>
							<td><?php echo $pendaftar_faskes ?>/<?php echo $d['kuota_faskes'] ?></td>
						</tr>
					<?php endforeach ?>
				</table>



			</div>
		</div>
	</div>

<!-- 	<div class="row">
		<div class="large-12 column">
			<h2>Peta Vaksinasi</h2>
			<table>
				<tr>
					<td>
						
					</td>
				</tr>
			</table>
		</div>
	</div> -->


</div>

<?php $a = 2;include '../footer.php'; ?>