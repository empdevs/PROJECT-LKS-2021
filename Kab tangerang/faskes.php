<?php
include_once('./config/config.php');
include_once('./controller/faskes/pesan_faskes.php');
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($mysqli, $_GET['id']);
	$query = $mysqli->query("SELECT * FROM faskes WHERE id ='$id'");
	if(mysqli_num_rows($query) > 0){
		include_once('./template/header.php');
		$faskes = mysqli_fetch_assoc($query);
?>
	<div class="container-header pb-70 bg-primary text-white" style="
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
		background-image: linear-gradient(to bottom,rgba(199,207,255,0.8), var(--blue)), url('<?php echo $data['site']?>/assets/images/<?php echo $faskes['img']?>');
	">
		<h1 class="mb-5"><?php echo $faskes['nama']?></h1>
		<div class="row flex-wrap">
			<div class="card-item space-between text-black mb-5">
				<div class="badge bg-primary text-white mb-2">Sisa Kuota Vaksinasi</div>
				<h1><?php echo $faskes['kuota']?></h1>
			</div>

			<div class="card-item text-black mb-5">
				<div class="badge bg-warning text-white mb-2">Total Peserta Vaksinasi</div>
				<h1><?php 
				$query = $mysqli->query("SELECT * FROM pesan_faskes WHERE faskes_id='$id'");
				echo mysqli_num_rows($query);
				?></h1>
			</div>
		</div>
		<form method="post">
			<input type="hidden" name="id" value="<?php echo $id?>">
			<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
			<button type="submit" name="pesan_faskes" class="btn w-200 bg-warning">Daftar Vaksin!</button>
		</form>
	</div>

	<?php if(isset($_SESSION['user'])) { ?>
	<?php if($_SESSION['user']['level'] == 'admin') { 
$query_pesan_faskes = $mysqli->query("SELECT * FROM pesan_faskes");
$hitung_pesan = mysqli_num_rows($query_pesan_faskes);
if($hitung_pesan > 0){
	$data_pesan_faskes = mysqli_fetch_assoc($query_pesan_faskes);
	$query_faskes = $mysqli->query("SELECT * FROM faskes WHERE id ='$id'");
	$data_faskes = mysqli_fetch_assoc($query_faskes);
?>
	<div class="container">
		<h1>Daftar Pemesan Vaksinasi</h1>
		<div class="mb-5">Bagian ini hanya admin yang bisa melihat.</div>
		<table class="table">
			<tr>
				<th>Nama Pengguna</th>
				<th>Tanggal Vaksinasi</th>
				<th>Tempat Vaksinasi</th>
				<th>Aksi</th>
			</tr>
			<?php 
			while ($data_pesan_faskes = mysqli_fetch_assoc($query_pesan_faskes)) {
				$user_id = $data_pesan_faskes['user_id'];
			?>
			<tr>
				<td><?php 
				$query_user = $mysqli->query("SELECT * FROM users where id='$user_id'");
				$user = mysqli_fetch_assoc($query_user);
				echo $user['nama_depan'].' '.$user['nama_belakang'];
				?></td>
				<td><?php echo $data_pesan_faskes['date']?></td>
				<td><?php echo $data_faskes['nama']?></td>
				<td>
					<div class="column center">
						<a href="<?php echo $data['site']?>/admin/user/pemesanan.php?id=<?php echo $user['id']?>" class="btn mb-2 bg-danger">Hapus Pemesanan</a>
						<a href="<?php echo $data['site']?>/admin/user/detail.php?id=<?php echo $user['id']?>" class="btn bg-primary">Lihat Pengguna</a>
					</div>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
<?php 
} else {
	?>

<?php } ?>
	<?php } ?>
	<?php } ?>
	<div class="container">
		<h1>Deskripsi Detail</h1>
		<div class="mb-5">Deskripsi lengkap dari fasilitas kesehatan ini.</div>
		<p class="mb-5"><?php echo $faskes['deskripsi']?></p>
	</div>
	<div class="container bg-primary text-white">
		<h1>Rekomendasi Fasilitas Kesehatan Lainnya</h1>
		<div class="mb-5">Belum cocok dengan fasilitas kesehatan ini? yuk pilih yang lain.</div>
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
	} else {
		include_once('./template/404.php');		
	}
} else {
	include_once('./template/404.php');		
}
	include_once('./template/footer.php');	
?>