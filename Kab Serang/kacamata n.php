<?php
<html>
<head>
<body>
<title>"Kacamatan"</title>
</head>

<ul>
<li><a href="menu"/a>
<li><a href="kepala"</a>
<li><a href="judul"</a>
<div class="Kacamatan"</div>

	<li><a herf="padaincang"</a>
	<li><a herf="pabuaran"</a>
	<li><a herf="ciomas"</a>
	<li><a herf="ranca latung"</a>
	<li><a herf="paleh"</a>
	<li><a herf="cinangka"</a>
	
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://localhost/vaksinasi';
	} else {
		$uri = 'http://localhost/vaksinasi';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'//localhost/vaksinasi');
	exit;
?>
