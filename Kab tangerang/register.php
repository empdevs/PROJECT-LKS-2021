<?php
include_once('./controller/register/form_post.php');
include_once('./template/header.php');
?>
	<div class="container-header column center">
		<h1>Daftar akun baru</h1>
		<span>Dengan mendaftar kamu bisa mengikuti program vaksinasi</span>
		<form method="POST"  class="card-auth">
			<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
			<div class="input-group">
				<input class="input-form" type="text" name="name" placeholder="Nama Depan">
				<input class="input-form" type="text" name="family" placeholder="Nama Keluarga">
				<input class="input-form" type="number" name="nik" placeholder="Nik">
				<input class="input-form" type="number" name="umur" placeholder="Umur">
				<input class="input-form" type="number" name="telepon" placeholder="Telepon">
				<input class="input-form" type="email" name="email" placeholder="Alamat Email">
				<input class="input-form" type="text" name="alamat" placeholder="Alamat">
				<input class="input-form" type="kota" name="kota" placeholder="Kota">
				<input class="input-form" type="provinsi" name="provinsi" placeholder="Provinsi">
				<input class="input-form" type="password" name="password" placeholder="Password">
				<input class="input-form" type="password" name="c_password" placeholder="Konfirmasi Password">
			</div>
			<span class="mb-2">Sudah punya akun? <a href="<?php echo $data['site']?>/login.php">Masuk</a></span>
			<div class="row">
				<button class="btn w-200 mr-2" name="register">Daftar</button>
				<a href="<?php echo $data['site']?>" class="btn w-200 bg-warning" name="register">Kembali</a>
			</div>
		</form>
	</div>
	<?php
include_once('./template/footer.php');
?>