<?php 
session_start();
if (@!$_SESSION['id_admin']) {
	echo "Anda tidak diijinkan untuk mengakses halaman ini";	
}else{

	include ('../koneksi.php');
	$id_peserta = mysqli_escape_string($koneksi, $_POST['id_peserta']);
	$nama_peserta = mysqli_escape_string($koneksi, $_POST['nama_peserta']);
	$keluarga_peserta = mysqli_escape_string($koneksi, $_POST['keluarga_peserta']);
	$nik_peserta = mysqli_escape_string($koneksi, $_POST['nik_peserta']);
	$umur_peserta = mysqli_escape_string($koneksi, $_POST['umur_peserta']);
	$telepon_peserta = mysqli_escape_string($koneksi, $_POST['telepon_peserta']);
	$email_peserta = mysqli_escape_string($koneksi, $_POST['email_peserta']);
	$password_peserta = mysqli_escape_string($koneksi, hash('md5', $_POST['password_peserta']));
	$alamat_peserta = mysqli_escape_string($koneksi, $_POST['alamat_peserta']);
	$kota_peserta = mysqli_escape_string($koneksi, $_POST['kota_peserta']);
	$provinsi_peserta = mysqli_escape_string($koneksi, $_POST['provinsi_peserta']);
	$status_peserta = mysqli_escape_string($koneksi, $_POST['status_peserta']);
	$jadwal_peserta = date("Y-m-d H:i:s", strtotime($_POST['jadwal_peserta']));

	//Kalo pass kosong gk usah update form passnya.
	if ($_POST['password_peserta'] != "") {
		$ifpassword = "`password_peserta` = '$password_peserta',";
	}
	else {
		$ifpassword = "";
	}


	$q = "UPDATE `tb_peserta` SET `id_peserta` = '$id_peserta', `nama_peserta` = '$nama_peserta', `keluarga_peserta` = '$keluarga_peserta', `nik_peserta` = '$nik_peserta', `umur_peserta` = '$umur_peserta', `telepon_peserta` = '$telepon_peserta', `email_peserta` = '$email_peserta', $ifpassword `alamat_peserta` = '$alamat_peserta', `kota_peserta` = '$kota_peserta', `provinsi_peserta` = '$provinsi_peserta',`status_peserta` = '$status_peserta',`jadwal_peserta` = '$jadwal_peserta' WHERE `tb_peserta`.`id_peserta` = $id_peserta";

	if (mysqli_query($koneksi, $q)) {
		echo "Sukses <a href='./kelola_peserta.php'>Kembali</a>";
	} else {
		echo "Gagal <a href='./kelola_peserta.php'>Kembali</a>";
	}

?>

<?php } ?>