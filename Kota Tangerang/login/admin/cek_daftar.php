<?php

session_start();

include 'config.php';


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars(md5($_POST['password']));
$role = "user";
$nama = htmlspecialchars($_POST['nama_depan']);
$nama_kk = htmlspecialchars($_POST['nama_keluarga']);
$nik = htmlspecialchars($_POST['nik']);
$umur = htmlspecialchars($_POST['umur']);
$telepon = htmlspecialchars($_POST['telepon']);
$email = htmlspecialchars($_POST['alamat_email']);
$alamat = htmlspecialchars($_POST['alamat']);
$kota = htmlspecialchars($_POST['kota']);
$provinsi = htmlspecialchars($_POST['provinsi']);
$tempat = htmlspecialchars($_POST['tempat']);
$jadwal = date('dd/mm/yy');



$query = mysqli_query($conn, "INSERT INTO data (username,password,role,nama_depan,nama_keluarga,nik,umur,telepon,alamat_email,alamat,kota,provinsi,tempat,jadwal) VALUES ('$username','$password','$role','$nama','$nama_kk','$nik','$umur','$telepon','$email','$alamat','$kota','$provinsi','$tempat','$jadwal')");




if($query){
	header("location:index.php?pesan=berhasil_tambah");
} else {
		header("location:index.php?pesan=gagal_tambah");
}



?>