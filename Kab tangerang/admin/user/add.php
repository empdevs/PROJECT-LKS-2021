<?php
include_once('../../controller/user/form_add.php');
include_once('../../template/header.php');
?>
<div class="container-header column center">
	<form method="POST" enctype="multipart/form-data" class="card-auth">
		<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
			<div class="input-group">
				<input class="input-form" type="file" name="file" placeholder="Foto Profile">
				<input class="input-form" type="text" name="name" placeholder="Nama Depan">
				<input class="input-form" type="text" name="family"  placeholder="Nama Keluarga">
				<input class="input-form" type="number" name="nik" placeholder="Nik">
				<input class="input-form" type="number" name="umur" placeholder="Umur">
				<input class="input-form" type="number" name="telepon" placeholder="Telepon">
				<input class="input-form" type="email" name="email" placeholder="Alamat Email">
				<input class="input-form" type="text" name="alamat" placeholder="Alamat">
				<input class="input-form" type="kota" name="kota" placeholder="Kota">
				<input class="input-form" type="provinsi" name="provinsi" placeholder="Provinsi">
				<input class="input-form" type="password" name="password" placeholder="Password">
			</div>
			<span class="mb-2">Perlu bantuan? <a href="<?php echo $data['site']?>/hubungi_kami.php">Hubungi kami</a></span>
			<div class="row">
				<button type="submit" class="btn w-200 mr-2" name="add_user">Tambah User</button>
				<a href="<?php echo $data['site'].'/admin/user.php'?>" class="btn w-200 bg-danger" >Kembali</a>
			</div>
		</form>
</div>
<?php 
include_once('../../template/footer.php');
?>