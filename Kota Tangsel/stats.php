<?php 

include('koneksi.php');

$q_total_peserta = "SELECT * FROM tb_peserta";
$q_total_faskes = "SELECT * FROM tb_faskes";
$q_peserta_divaksin = "SELECT * FROM tb_peserta WHERE status_peserta = 1";
$q_peserta_menunggu_divaksin = "SELECT * FROM tb_peserta WHERE status_peserta = 0";

$total_peserta = mysqli_num_rows(mysqli_query($koneksi, $q_total_peserta));
$total_faskes = mysqli_num_rows(mysqli_query($koneksi, $q_total_faskes));
$peserta_divaksin = mysqli_num_rows(mysqli_query($koneksi, $q_peserta_divaksin));
$peserta_menunggu_divaksin = mysqli_num_rows(mysqli_query($koneksi, $q_peserta_menunggu_divaksin));

 ?>