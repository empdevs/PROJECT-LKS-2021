<?php 

	$pendaftaran_id = $_GET["pendaftaran_id"];
	mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE pendaftaran_id = '$pendaftaran_id'");
	echo "<script>
				alert('Data berhasil dihapus');
				document.location.href='my_profile.php?page=peserta';
			</script>";
 ?>