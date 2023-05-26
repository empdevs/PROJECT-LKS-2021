<?php
include_once('../config/config.php');
include_once('../template/header.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
} else {
	if($_SESSION['user']['level'] !== 'admin'){
		header('Location:'.$data['site'].'/profile.php');
	}
}
?>
	<div class="container-header h-100 column bg-linear-gradient text-white">
		<h1>Daftar User Pengguna Website</h1>
		<span class="mb-5">Berikut daftar user pengguna website.</span>
		<a href='<?php echo $data['site']?>/admin/user/add.php' class="btn w-200 mb-2">Tambah Pengguna</a>
		<form method="GET" class="search-group">
			<input value="<?php if(isset($_GET['search'])){	
	echo mysqli_real_escape_string($mysqli, $_GET['search']);
} else {  echo ''; }?>" class="search-faskes" type="search" name="search" placeholder="Cari User Berdasarkan Nama"/>
			<button type="submit" class="btn-search">Cari</button>
		</form>
		<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
		<div class="row overflow-x-auto">
			<?php 
			if(isset($_GET['search'])){
				$search = mysqli_real_escape_string($mysqli, $_GET['search']);
				$get_user = $mysqli->query("SELECT * FROM users WHERE nama_depan like '%".$search."%' or nama_belakang like '%".$search."%' ");
			} else {
				$get_user = $mysqli->query("SELECT * FROM users");
			}
			while($users = mysqli_fetch_assoc($get_user)) {
			?>
			<div class="card-item column center">
				<img src="<?php echo $data['site']?>/assets/images/<?php echo $users['img']?>" class="avatar-profile-sm img-rounded mb-2">
				<h5 class="text-black mb-2"><?php echo $users['nama_depan']?> <?php echo $users['nama_belakang']?></h5>
				<div class="row mb-2">
				<span class="badge bg-primary mr-1"><?php echo $users['level']?></span>
				<span class="badge bg-warning"><?php echo $users['kota']?></span>
				</div>
				<div class="row space-between w-100">
					<a href="<?php echo $data['site'] ?>/admin/user/detail.php?id=<?php echo $users['id']?>" class="btn font-14">Detail User</a>
					<a href="<?php echo $data['site'] ?>/admin/user/delete.php?id=<?php echo $users['id']?>" class="btn font-14 bg-danger">Delete User</a>
				</div>
			</div>
			<?php 
		}
		?>
		</div>
	</div>
<?php
include_once('../template/footer.php');
?>