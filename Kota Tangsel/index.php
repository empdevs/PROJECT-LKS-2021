
<?php $a = 1; include 'header.php'; 
include('stats.php');
?>


<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1><img src="./img/favicon.png" />Selamat datang di website pelayanan vaksinasi.</h1>
	      <p class="alert-box">total peserta vaksin yang terdaftar : <?php echo $total_peserta ?> | Jumlah faskes yang terdaftar : <?php echo $total_faskes ?> | Jumlah peserta divaksin : <?php echo $peserta_divaksin ?> | Jumlah peserta menunggu divaksin : <?php echo $peserta_menunggu_divaksin ?></p>
	    </div>
	  </div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<img src="./img/vaccine.png" class="image">
		</div>
		<div class="large-8 columns">
			<h2>Mengapa Vaksinasi itu penting ?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<img src="./img/vaccine2.png" class="image">
		</div>
		<div class="large-8 columns">
			<h2>Bagaimana Prosedur untuk mendapatkan vaksin ?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

</div>

<?php $a = 1;include 'footer.php'; ?>