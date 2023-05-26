<!DOCTYPE html>
<html leng="en"
<head>
<center>
<link style= type="teks/css name=
"nik" ="">
<title>"LAYANAN VAKSINASI"</title>
</head>

<ul>
<li><a href="menu"/a>
<li><a href="kepala"</a>
<li><a href="judul"</a>
<div class="LAYANAN VAKSINASI.admin"</div>

	<li><a herf="Nama depan"</a>
	<li><a herf="Nama keluarga"</a>
	<li><a herf="NIK"</a>
	<li><a herf="Umur"</a>
	<li><a herf="Telepon"</a>
	<li><a herf="Almat Email"</a>
	<li><a herf="Alamat"</a>
	<li><a herf="Kota"</a>
	<li><a herf="Provinsi"</a>


	<li><a input= type="teks/css" name="Nama" hyperseet="masukan Nama anda"</a>
	<li><a input= type="teks/css" name="NIK" hyperseet="masukan NIK anda"</a>

<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>



</center>
</body>
</html>



