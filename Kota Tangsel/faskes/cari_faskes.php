<?php 

include "../koneksi.php";
if (isset($_POST['kata_kunci'])) {
	$kata_kunci = mysqli_escape_string($koneksi, $_POST['kata_kunci']);
	$q_search = "SELECT * FROM tb_faskes LEFT JOIN tb_kecamatan ON tb_faskes.id_kecamatan = tb_kecamatan.id_kecamatan WHERE nama_faskes LIKE '%$kata_kunci%' OR alamat_faskes LIKE '%$kata_kunci%' OR nama_kecamatan LIKE '%$kata_kunci%';";
	$a_search = mysqli_query($koneksi, $q_search);
}
elseif (isset($_POST['nama_kecamatan'])) {
	$nama_kecamatan = mysqli_escape_string($koneksi, $_POST['nama_kecamatan']);
	$q_search = "SELECT * FROM tb_faskes LEFT JOIN tb_kecamatan ON tb_faskes.id_kecamatan = tb_kecamatan.id_kecamatan WHERE nama_kecamatan = '$nama_kecamatan';";
	$a_search = mysqli_query($koneksi, $q_search);	
}

 ?>

 <?php $a = 2;include '../header.php'; ?>



<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Hasil cari faskes</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<h2>Faskes</h2>
			<table style="width:100%;">
				<tr>
					<td>Nama Faskes</td>
					<td>Alamat Faskes</td>
					<td>Kuota Faskes</td>
				</tr>
				<?php foreach ($a_search as $d): ?>
					<?php 
						$id_faskes = $d['id_faskes'];
						$q = "SELECT * FROM tb_peserta WHERE id_faskes = $id_faskes";
						$pendaftar_faskes = mysqli_num_rows(mysqli_query($koneksi, $q));
						$a_kuota_faskes = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_faskes WHERE id_faskes = $id_faskes"));
						$kuota_faskes = $a_kuota_faskes['kuota_faskes'];

					 ?>
					<tr>
						<td><?php echo $d['nama_faskes'] ?></td>
						<td><?php echo $d['alamat_faskes'] ?></td>
						<td><?php echo $pendaftar_faskes ?>/<?php echo $d['kuota_faskes'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
		<a href="./">Kembali</a>
	</div>


</div>

<?php $a = 2;include '../footer.php'; ?>