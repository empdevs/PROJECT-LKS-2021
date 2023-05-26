<?php 

include ('../koneksi.php');

$nama_peserta = mysqli_escape_string($koneksi, $_POST['nama_peserta']);
$keluarga_peserta = mysqli_escape_string($koneksi, $_POST['keluarga_peserta']);
$nik_peserta = mysqli_escape_string($koneksi, $_POST['nik_peserta']);
$umur_peserta = mysqli_escape_string($koneksi, $_POST['umur_peserta']);
$telepon_peserta = mysqli_escape_string($koneksi, $_POST['telepon_peserta']);
$email_peserta = mysqli_escape_string($koneksi, $_POST['email_peserta']);
$password_peserta = mysqli_escape_string($koneksi, hash('md5', $_POST['password_peserta']));
$alamat_peserta = mysqli_escape_string($koneksi, $_POST['alamat_peserta']);
$kota_peserta = mysqli_escape_string($koneksi, $_POST['kota_peserta']);
$provinsi_peserta = mysqli_escape_string($koneksi, $_POST['provinsi_peserta']);
$id_faskes = mysqli_escape_string($koneksi, $_POST['id_faskes']);
$status_peserta = 0;






#INSERT
$query = "INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `keluarga_peserta`, `nik_peserta`, `umur_peserta`, `telepon_peserta`, `email_peserta`, `password_peserta`, `alamat_peserta`, `kota_peserta`, `provinsi_peserta`, `id_faskes`) VALUES (NULL, '$nama_peserta', '$keluarga_peserta', '$nik_peserta', '$umur_peserta', '$telepon_peserta', '$email_peserta', '$password_peserta', '$alamat_peserta', '$kota_peserta', '$provinsi_peserta', '$id_faskes')";
if (mysqli_query($koneksi, $query)) {
	echo "Sukses";
} else {
	echo "Gagal";
}

 ?>