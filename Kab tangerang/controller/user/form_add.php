<?php 
include_once('../../config/config.php');

if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
} else {
	if($_SESSION['user']['level'] !== 'admin'){
		header('Location:'.$data['site'].'/profile.php');
	}
}
if(isset($_POST['add_user'])){
	$nama_file = $_FILES['file']['name'];
	$tmp_file = $_FILES['file']['tmp_name'];
	$destination = '../../assets/images/';
	move_uploaded_file($tmp_file, $destination.$nama_file);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$family = mysqli_real_escape_string($mysqli, $_POST['family']);
	$nik = mysqli_real_escape_string($mysqli, $_POST['nik']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$telepon = mysqli_real_escape_string($mysqli, $_POST['telepon']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
	$kota = mysqli_real_escape_string($mysqli, $_POST['kota']);
	$provinsi = mysqli_real_escape_string($mysqli, $_POST['provinsi']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	if(empty($name) || empty($family) || empty($nik) || empty($umur) || empty($telepon) || empty($email) || empty($alamat) || empty($kota) || empty($provinsi) || empty($password)){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Masih ada form yang kosong.');
	} else {
		$md5_password = md5($password);
		$query = $mysqli->query("INSERT INTO users(img, nama_depan, nama_belakang, nik, umur, telepon, email, alamat, kota, provinsi, password, level) values('$nama_file','$name', '$family', '$nik', '$umur', '$telepon', '$email', '$alamat', '$kota', '$provinsi', '$md5_password', 'member')");
		if(!$query){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error connection.');
		} else {
		$_SESSION['alert'] = array('type' => 'success', 'message' => 'Mendaftarkan akun berhasil silahkan login.');
		}
	}
}
?>