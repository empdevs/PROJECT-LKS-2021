<?php
include_once('../config/config.php');
include_once('../template/header.php');

$query_total_faskes = $mysqli->query("SELECT * FROM faskes");
$total_faskes = mysqli_num_rows($query_total_faskes);

$query_total_peserta = $mysqli->query("SELECT * FROM pesan_faskes");
$total_peserta = mysqli_num_rows($query_total_peserta);

$query_total_user = $mysqli->query("SELECT * FROM users");
$total_user = mysqli_num_rows($query_total_user);
?>
<div class="container-header">
	<div class="row">
	<div class="card-item space-between text-black mb-5 bg-primary">
		<div class="badge text-white mb-2">Total Fasilitas Kesehatan</div>
		<h1 class="text-white"><?php echo $total_faskes?></h1>
	</div>
	<div class="card-item bg-warning text-black mb-5">
		<div class="badge text-white mb-2">Total Peserta Vaksinasi</div>
		<h1 class="text-white"><?php echo $total_peserta ?></h1>
	</div>
	<div class="card-item bg-danger text-black mb-5">
		<div class="badge text-white mb-2">Total Pengguna Website</div>
		<h1 class="text-white"><?php echo $total_user ?></h1>
	</div>
	</div>
</div>
<?php
include_once('../template/footer.php');
?>