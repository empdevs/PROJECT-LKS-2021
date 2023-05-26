<?php 
session_start();
if (@!$_SESSION['id_admin']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{

$q = "SELECT * FROM tb_peserta";


?>
<?php $a = 2;include '../header_admin.php';
include '../stats.php';
 ?>
<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Selamat datang admin</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<h2>Statistik Website</h2>
			<p class="alert-box">total peserta vaksin yang terdaftar : <?php echo $total_peserta ?> | Jumlah faskes yang terdaftar : <?php echo $total_faskes ?> | Jumlah peserta divaksin : <?php echo $peserta_divaksin ?> | Jumlah peserta menunggu divaksin : <?php echo $peserta_menunggu_divaksin ?></p>
		</div>
	</div>

</div>

<?php $a = 2;include '../footer.php'; ?>

<?php } ?>