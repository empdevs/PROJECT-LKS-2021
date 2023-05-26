<?php
include_once('./controller/login/form_post.php');
include_once('./template/header.php');
?>
	<div class="container-header column center">
		<h1>Masuk ke akun</h1>
		<span>Masuk ke akunmu</span>
		<form method="POST" class="card-auth">
			<?php 
			if(isset($_SESSION['alert'])){
			?>
			<div class="alert bg-<?php echo $_SESSION['alert']['type']?>">
				<?php echo $_SESSION['alert']['message'] ?>
			</div>
			<?php } ?>
			<div class="input-group">
				<input class="input-form" type="email" name="email" placeholder="Email terdaftar">
				<input class="input-form" type="password" name="password" placeholder="Password">
			</div>
			<span class="mb-5">Belum mempunyai akun? <a href="<?php echo $data['site']?>/register.php">Daftar</a></span>
			<button class="btn w-200" name="login">Masuk</button>
		</form>
	</div>

</body>
</html>

	<?php
include_once('./template/footer.php');?>