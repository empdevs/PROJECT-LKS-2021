<?php
include_once('./config/config.php');
if(isset($_SESSION['user'])){
	header('Location:'.$data['site']);
}
if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
	if(empty($_POST['email']) || empty($_POST['password'])){
		$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Username Atau Password Belum Di Isi.');
	} else {
		$query = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
		$rows = mysqli_num_rows($query);
		if($rows == 0){
			$_SESSION['alert'] = array('type' => 'danger', 'message' => 'Username Atau Password Salah.');
		} else {
			$user = mysqli_fetch_assoc($query);
			$_SESSION['user'] = $user;
			if($user['level'] == 'admin'){
				header('Location: '.$data['site'].'/admin/index.php');	
			} else {
				header('Location: '.$data['site'].'/dashboard.php');	
			}
		}
	}
}