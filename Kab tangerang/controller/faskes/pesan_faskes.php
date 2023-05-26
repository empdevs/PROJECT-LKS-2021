<?php
include_once('./config/config.php');
if(!isset($_SESSION['user'])){
	header('Location:'.$data['site'].'/login.php');
}
if(isset($_POST['pesan_faskes'])){
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$date = date('Y-m-d');
	$user_id = $_SESSION['user']['id'];
	$check_query = $mysqli->query("SELECT * FROM pesan_faskes where user_id='$user_id'");
	if(mysqli_num_rows($check_query) > 0){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Kamu sudah terdaftar disalah satu faskes.');
	} else {
		$query = $mysqli->query("INSERT INTO pesan_faskes(user_id,faskes_id,date) values('$user_id','$id', '$date')");
		if(!$query){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Server Err.');
		} else {	
		$query_faskes = $mysqli->query("SELECT * FROM faskes where id='$id'");
		$faskes = mysqli_fetch_assoc($query_faskes);
		if($faskes['kuota'] > 0){
			$kuota = $faskes['kuota'] - 1;
			$update_faskes = $mysqli->query("UPDATE faskes SET kuota='$kuota' WHERE id='$id'");
			$_SESSION['alert'] = array('type' => 'success', 'message' => 'Berhasil mendaftar vaksinasi di fasilitas kesehatan.');
		} else {
			$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Gagal kuota faskes tidak mencukupi.');
		}
	}
	}
}