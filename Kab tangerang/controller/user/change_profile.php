<?php
include_once('./config/config.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
}

if(isset($_POST['change_profile'])){
	$nama_file = $_FILES['file']['name'];
	$tmp_file = $_FILES['file']['tmp_name'];
	$destination = './assets/images/';
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
	if(empty($nama_file) || empty($name) || empty($family) || empty($nik) || empty($umur) || empty($telepon) || empty($email) || empty($alamat) || empty($kota) || empty($provinsi)){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Masih ada form yang kosong.');
	} else {
		$md5_password = md5($password);
		$id = $_SESSION['user']['id'];
		$query = $mysqli->query("UPDATE users set img='$nama_file', nama_depan = '$name' where id='$id'");
		$user = mysqli_fetch_assoc($query);
		$_SESSION['user'] = $user;
		if(!$query){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error connection.');
		} else {
		$_SESSION['alert'] = array('type' => 'success', 'message' => 'Berhasil merubah akun.');
		}
	}
}