<?php 
include_once('./config/config.php');
if(isset($_SESSION['user'])){
	header('Location:'.$data['site']);
}
if(isset($_POST['register'])){
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
	$c_password = mysqli_real_escape_string($mysqli, $_POST['c_password']);
	if(empty($name) || empty($family) || empty($nik) || empty($umur) || empty($telepon) || empty($email) || empty($alamat) || empty($kota) || empty($provinsi) || empty($password) || empty($c_password)){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Masih ada form yang kosong.');
	} else if($password <> $c_password){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Konfirmasi password tidak sama.');
	} else {
		$query_check_email = $mysqli->query("SELECT * FROM users where email='$email'");
		$email_count = mysqli_num_rows($query_check_email);
		if($email_count > 0){
			$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Email sudah digunakan.');
		} else {
			$md5_password = md5($password);
			$query = $mysqli->query("INSERT INTO users(img, nama_depan, nama_belakang, nik, umur, telepon, email, alamat, kota, provinsi, password, level) values('avatar2.png','$name', '$family', '$nik', '$umur', '$telepon', '$email', '$alamat', '$kota', '$provinsi', '$md5_password', 'member')");
			if(!$query){
			$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error connection.');
			} else {
			$_SESSION['alert'] = array('type' => 'success', 'message' => 'Mendaftarkan akun berhasil silahkan login.');
			}	
		}
	}
}