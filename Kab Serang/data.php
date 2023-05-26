<html>
<head>
<center>
<link style= type="teks/css" name=
"nik" href="css"
<title>"LAYANAN VAKSINASI"</title>
</head>

<ul>
<li><a href="menu"></a>
<li><a href="kepala"></a>
<li><a href="judul"></a>
<div class="LAYANAN VAKSINASI.admin"></div>

	<li><a herf="Quota vaksinasi"></a>
	<li><a herf="Kata kunci"></a>
	<li><a herf="kacamata"></a>
	


	<li><a input= type="teks/css" name="Nama" href="masukan Nama anda"></a>
	<li><a input= type="teks/css" name="NIK" href="masukan NIK anda"></a>


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



