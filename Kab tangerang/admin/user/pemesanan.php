<?php
include_once('../../config/config.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
} else {
	if($_SESSION['user']['level'] !== 'admin'){
		header('Location:'.$data['site'].'/profile.php');
	}
}
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($mysqli, $_GET['id']);
	$query = $mysqli->query("DELETE FROM pesan_faskes WHERE user_id='$id'");
	if(!$query){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error!');
		header('Location:'.$data['site'].'/list-faskes.php');
	} else {
		$_SESSION['alert'] = array('type' => 'success', 'message' => 'Berhasil menghapus fasilitas kesehatan!');
		header('Location:'.$data['site'].'/list-faskes.php');
	}
}
?>