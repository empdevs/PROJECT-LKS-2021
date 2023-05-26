<?php
include_once('./controller/user/change_profile.php');
include_once('./template/header.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site']);
}
$id = $_SESSION['user']['id'];
$query = $mysqli->query("SELECT * FROM users where id='$id'");
$data_user = mysqli_fetch_assoc($query);
?>
<div class="container-header column center">
	<img src="<?php echo $data['site'] ?>/assets/images/<?php echo $_SESSION['user']['img']?>" class="avatar-profile"/>
	<h1><?php echo $data_user['nama_depan']?> <?php echo $data_user['nama_belakang']?></h1>
	<span>Level: <?php echo $data_user['level']?></span>
	<form method="POST" enctype="multipart/form-data"  class="card-auth">
		<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>

			<div class="input-group">
				<input class="input-form" type="file" name="file" placeholder="Foto Profile">
				<input class="input-form" type="text" name="name" value="<?php echo $data_user['nama_depan']?>" placeholder="Nama Depan">
				<input class="input-form" type="text" name="family" value="<?php echo $data_user['nama_belakang']?>"  placeholder="Nama Keluarga">
				<input class="input-form" type="number" name="nik"  value="<?php echo $data_user['nik']?>" placeholder="Nik">
				<input class="input-form" type="number" name="umur"  value="<?php echo $data_user['umur']?>" placeholder="Umur">
				<input class="input-form" type="number" name="telepon"  value="<?php echo $data_user['telepon']?>" placeholder="Telepon">
				<input class="input-form" type="email" name="email"  value="<?php echo $data_user['email']?>" placeholder="Alamat Email">
				<input class="input-form" type="text" name="alamat"  value="<?php echo $data_user['alamat']?>" placeholder="Alamat">
				<input class="input-form" type="kota" name="kota"  value="<?php echo $data_user['kota']?>" placeholder="Kota">
				<input class="input-form" type="provinsi" name="provinsi"  value="<?php echo $data_user['provinsi']?>" placeholder="Provinsi">
			</div>
			<span class="mb-2">Perlu bantuan? <a href="<?php echo $data['site']?>/login.php">Hubungi kami</a></span>
			<div class="row">
				<button type="submit" class="btn w-200 mr-2" name="change_profile">Ubah Profile</button>
				<a href="./logout.php" class="btn w-200 bg-warning" >Keluar</a>
			</div>
		</form>
</div>
<?php 
include_once('./template/footer.php');
?>