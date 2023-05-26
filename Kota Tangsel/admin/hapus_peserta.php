<?php 
session_start();
if (@!$_SESSION['id_admin']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{

	if (isset($_POST['id_peserta'])) {

		include ('../koneksi.php');

		$id_peserta = mysqli_escape_string($koneksi, $_POST['id_peserta']);
		$q = "DELETE FROM `tb_peserta` WHERE `tb_peserta`.`id_peserta` = $id_peserta";
		if (mysqli_query($koneksi, $q)) {
			echo "Hapus Sukses <a href='./kelola_peserta.php'>OK</a>";
		}else{
			echo "Hapus Error <a href='./kelola_peserta.php'>OK</a>";
		}
		
	}else{

	include ('../koneksi.php');

	$id_peserta = mysqli_escape_string($koneksi, $_GET['id_peserta']);
	$q = "SELECT * FROM tb_peserta WHERE id_peserta = $id_peserta";
	$array = mysqli_fetch_assoc(mysqli_query($koneksi, $q));
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Hapus
	</title>
</head>
<body>

<h3>apakah anda ingin menghapus <?php echo $array['nama_peserta'] ?> ?</h3>

<form action="hapus_peserta.php" method="post">

	<input type="text" name="id_peserta" value="<?php echo $id_peserta ?>" hidden>
	<input type="submit" name="submit" value="YA">

</form>
<a href="./kelola_peserta.php"  style="margin-left: 50px;">Tidak</a>

</body>
</html>



<?php }} ?>