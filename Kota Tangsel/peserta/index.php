<?php 

session_start();
if (@$_SESSION['id_peserta']) {
	header('location:./dashboard.php');
}
 ?>

<?php $a = 2;include '../header.php'; ?>


<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Selamat datang peserta vaksinasi, silahkan login atau registrasi</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<a href="./login.php" class="button">LOGIN</a>
			<a href="./registrasi.php" class="button">REGISTRASI</a>
		</div>
	</div>

</div>

<?php $a = 2;include '../footer.php'; ?>