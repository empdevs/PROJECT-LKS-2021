<!DOCTYPE html>
<html leng="en">
<head>
<center>
<link style= type="teks/css" name=
"LAYANAN VAKSINASI" href="css">
<title>"LAYANAN VAKSINASI"</title><link style= type="teks/css" name="form pendaftaran"
"NIK" href="css">
</head>

<ul>
<li><a href="menu"/a>
<li><a href="kepala"></a>
<li><a href="judul"></a>
<div class="LAYANAN VAKSINASI.admin"/div>

	<li><a herf="Nama depan"></a>
	<li><a herf="Nama keluarga"></a>
	<li><a herf="NIK"></a>
	<li><a herf="Umur"></a>
	<li><a herf="Telepon"></a>
	<li><a herf="Almat Email"></a>
	<li><a herf="Alamat"></a>
	<li><a herf="Kota"></a>
	<li><a herf="Provinsi"></a>


	<li><a input= type="teks/css" name="Nama" hyperseet="masukan Nama anda"></a>
	<li><a input= type="teks/css" name="NIK" hyperseet="masukan NIK anda"></a>

<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://localhost/vaksinasi';
	} else {
		$uri = 'http://localhost/vaksinasi';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/localhost/vaksinasi/');
	exit;
?>




</center>
</body>
</html>
