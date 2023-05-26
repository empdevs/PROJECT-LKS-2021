<?php
session_start();

include 'config.php';

$id = $_POST['id'];
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



$query = mysqli_query($conn, "UPDATE data SET username='$username', password='$password', role='$role', nama_depan='$nama', nama_keluarga='$nama_kk', nik='$nik', umur='$umur', telepon='$telepon', alamat_email='$email', alamat='$alamat', kota='$kota', provinsi='$provinsi' WHERE id='$id'");


echo $query;

if($query){
	header("location:index.php?pesan=berhasil");
} else {
		header("location:../edit.php?pesan=gagal");
}

?>