<?php 
include_once('../../config/config.php');
if(isset($_SESSION['user'])){
if($_SESSION['user']['level'] == 'admin'){
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($mysqli, $_GET['id']);
	$query = $mysqli->query("SELECT * FROM users WHERE id='$id'");
	$num_rows = mysqli_num_rows($query);
	if($num_rows > 0){
	$data_user = mysqli_fetch_assoc($query);
	include_once('../../template/header.php');
		?>
		<div class="container-header column center">
			<img src="<?php echo $data['site'].'/assets/images/'.$data_user['img'] ?>" class="avatar-profile"/>
			<h1><?php echo $data_user['nama_depan']?> <?php echo $data_user['nama_belakang']?></h1>
			<span>Level: <?php echo $data_user['level']?></span>
			<div class="row">
				<span class="badge bg-primary text-white mr-1"><?php echo $data_user['kota']?></span>
				<span class="badge bg-warning text-white"><?php echo $data_user['provinsi']?></span>
			</div>
		</div>
<?php
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
			<td>
				<div class="row">
					<a href="<?php echo $data['site']?>/faskes.php?id=<?php echo $data_faskes['id']?>" class="btn w-100 mr-2 bg-primary">Lihat Faskes</a>
					<a href="<?php echo $data['site']?>/user/pemesanan.php?id=<?php echo $data_faskes['id']?>" class="btn w-100 bg-danger">Hapus Jadwal</a>
				</div>
			</td>
		</tr>
	</table>
</div>
<?php 
	include_once('../../template/footer.php');
} else {
	?>
	<div class="container">
		<h1>User ini belum mendaftar vaksinasi</h1>
	</div>
<?php
	include_once('../../template/footer.php');
}
}
}
} else {
	header('Location :'.$data['site'].'/profile.php');
}
} else {
	header('Location :'.$data['site'].'/profile.php');
}
?>