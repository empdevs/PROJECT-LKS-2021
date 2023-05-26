<?php
<html>
<head>
<body>
<title>"Kota/Kabupaten"</title>
</head>

<ul>
<li><a href="menu"/a>
<li><a href="kepala"</a>
<li><a href="judul"</a<div class="Kota/Kabupaten"</div>>


<li><a herf="Serang"</a>
<li><a herf="Paneglang"</a>
<li><a herf="Tanggerang"</a>
<li><a herf="Tanggerang selatan"</a>
<li><a herf="Cilegon"</a>
<li><a herf="Lebak"</a>

if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://localhost/vaksinasi';
	} else {
		$uri = 'http://localhost/vaksinasi';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/localhost/vaksinasi');
	exit;
?>

