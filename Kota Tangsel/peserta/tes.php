<?php 



echo $jadwal_peserta = date("Y-m-d H:i:s", time());
$waktu = time() + 604800; //Add 7 hari
echo date("Y-m-d H:i:s", $waktu);

 ?>