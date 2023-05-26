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
	$query = $mysqli->query("DELETE FROM users WHERE id='$id'");
	if($_SESSION['user']['id'] == $id){
		session_destroy();
		} else {
		if(!$query){
			$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server error!');
		} else {
			$_SESSION['alert'] = array('type' => 'success', 'message' => 'Berhasil menghapus fasilitas kesehatan!');
		}
		header('Location:'.$data['site'].'/faskes.php');
	}
}
?>