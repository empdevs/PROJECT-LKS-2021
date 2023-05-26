<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'tb_web_vaksin');

if (!$koneksi) {
	echo "Koneksi GAGAL !!";
}

 ?>