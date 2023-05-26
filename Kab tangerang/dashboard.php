<?php
include_once('./config/config.php');
include_once('./template/header.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site']);
}
$user_id = $_SESSION['user']['id'];
$query_pesan_faskes = $mysqli->query("SELECT * FROM pesan_faskes WHERE user_id='$user_id'");
$hitung_pesan = mysqli_num_rows($query_pesan_faskes);
if($hitung_pesan > 0){
	$data_pesan_faskes = mysqli_fetch_assoc($query_pesan_faskes);
	$faskes_id = $data_pesan_faskes['faskes_id'];
	$query_faskes = $mysqli->query("SELECT * FROM faskes WHERE id ='$faskes_id'");
	$data_faskes = mysqli_fetch_assoc($query_faskes);
?>
<div class="container-header">
	<h1 class="mb-5">Data Waktu Vaksinasi</h1>
	<table class="table">
		<tr>
			<th>Tanggal Vaksinasi</th>
			<th>Tempat Vaksinasi</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td><?php echo $data_pesan_faskes['date']?></td>
			<td><?php echo $data_faskes['nama']?></td>
			<td><a href="<?php echo $data['site']?>/faskes.php?id=<?php echo $data_faskes['id']?>" class="btn w-100 bg-primary">Lihat Faskes</a></td>
		</tr>
	</table>
</div>
<?php 
} else {
	?>
<div class="container-header bg-primary text-white">
	<h1>Belum vaksin?</h1>
	<span class="mb-5">Berikut rekomendasi fasilitas kesehatan yang menunjang vaksin.</span>
	<div class="row overflow-x-auto">
	<?php 
			$get_faskes = $mysqli->query("SELECT * FROM faskes");
			while($faskes = mysqli_fetch_assoc($get_faskes)) {
			?>
			<div class="card-item">
				<img src="<?php echo $data['site']?>/assets/images/<?php echo $faskes['img']?>" class="card-img mb-2"/>
				<h5 class="text-black mb-2"><?php echo $faskes['nama']?></h5>
				<div class="mb-5">
				<span class="badge bg-primary"><?php echo $faskes['kecamatan']?></span>
				<span class="badge bg-warning">Kuota: <?php echo $faskes['kuota']?></span>
				</div>
				<a href="<?php echo $data['site'] ?>/faskes.php?id=<?php echo $faskes['id']?>" class="btn btn-block">Ikut Vaksin!</a>
			</div>
			<?php 
		}
		?>
	</div>
</div>
	<?php
}
include_once('./template/footer.php');
?>