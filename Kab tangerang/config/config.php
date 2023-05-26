<?php
session_start();
$data = array('site' => 'http://localhost/covid19');
$host = 'localhost';
$username = 'root';
$password = '';
$name = 'covid19';
if(isset($_SESSION['alert'])){
	$_SESSION['alert'] = null;
}
$mysqli = mysqli_connect($host, $username, $password, $name);
?>