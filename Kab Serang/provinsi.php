<?php
<html>
<head>
<body>
<title>"Provinsi"</title>
<link style= type="teks/css" name=
"Provinsi" href="css">
</head>

<ul>
<li><a href="menu"></a>
<li><a href="kepala"></a>
<li><a href="judul"></a>
<div class="Provinsi"></div>

	<li><a herf="Aceh"></a>
	<li><a herf="Banten"></a>
	<li><a herf="Kalimantan"></a>
	<li><a herf="Jawa Barat"></a>
	<li><a herf="jawa timur"></a>
	<li><a herf="Dki jakarta"></a>
	<li><a herf="Yoyakarta"></a>
	<li><a herf="Sumatra utara"></a>
	<li><a herf="Bali"></a>

	<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://localhost/vaksinasi';
	} else {
		$uri = 'http://localhost/vaksinasi';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'//localhost/vaksinasi/');
	exit;
?>

?>
