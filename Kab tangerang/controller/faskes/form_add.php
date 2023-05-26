<?php 
include_once('../../config/config.php');

if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
} else {
	if($_SESSION['user']['level'] !== 'admin'){
		header('Location:'.$data['site'].'/profile.php');
	}
}
if(isset($_POST['add_faskes'])){
	$nama_file = $_FILES['file']['name'];
	$tmp_file = $_FILES['file']['tmp_name'];
	$destination = '../../assets/images/';
	move_uploaded_file($tmp_file, $destination.$nama_file);
	$nama_faskes = mysqli_real_escape_string($mysqli, $_POST['nama_faskes']);
	$deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);
	$kecamatan = mysqli_real_escape_string($mysqli, $_POST['kecamatan']);
	$kuota = mysqli_real_escape_string($mysqli, $_POST['kuota']);
	if(empty($nama_file) || empty($kuota) || empty($kecamatan) || empty($nama_faskes) || empty($deskripsi)){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Masih ada form yang kosong.');
	} else {
		$md5_password = md5($password);
		$query = $mysqli->query("INSERT INTO faskes(img, nama, kuota, kecamatan, deskripsi) values('$nama_file','$nama_faskes','$kuota','$kecamatan','$deskripsi')");
		if(!$query){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error connection.');
		} else {
		$_SESSION['alert'] = array('type' => 'success', 'message' => 'Berhasil menambah faskes.');
		}
	}
}
?>