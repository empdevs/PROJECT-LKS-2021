<?php 

include ('../koneksi.php');

$email_peserta = mysqli_escape_string($koneksi, $_POST['email_peserta']);
$password_peserta = mysqli_escape_string($koneksi, hash('md5', $_POST['password_peserta']));

$q_cek_peserta = "SELECT * FROM tb_peserta WHERE email_peserta = '$email_peserta' AND password_peserta = '$password_peserta'";
$q = mysqli_query($koneksi, $q_cek_peserta);

$cek = mysqli_num_rows($q);

if ($cek == 1) {
	#jika sukses cek
	$array_peserta = mysqli_fetch_array($q);
	session_start();
	$_SESSION['id_peserta'] = $array_peserta['id_peserta'];
	header('location: ./dashboard.php');

} else{
	echo "<a href='./'>Gagal Login, Silahkan cek Email dan password</a>";
}

 ?>

