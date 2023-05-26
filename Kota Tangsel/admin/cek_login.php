<?php 

include ('../koneksi.php');

$username_admin = mysqli_escape_string($koneksi, $_POST['username_admin']);
$password_admin = mysqli_escape_string($koneksi, hash('md5', $_POST['password_admin']));

$q_cek_admin = "SELECT * FROM tb_admin WHERE username_admin = '$username_admin' AND password_admin = '$password_admin'";
$q = mysqli_query($koneksi, $q_cek_admin);

$cek = mysqli_num_rows($q);

if ($cek == 1) {
	#jika sukses cek
	$array_admin = mysqli_fetch_array($q);
	session_start();
	$_SESSION['id_admin'] = $array_admin['id_admin'];
	header('location: ./dashboard.php');

} else{
	echo "<a href='./'>Gagal Login, Silahkan cek username dan password</a>";
}

 ?>

