<?php 

	$user_id = $_GET["user_id"];
	mysqli_query($koneksi,"DELETE FROM user WHERE user_id = '$user_id'");
	echo "<script>
				alert('Anda belum registrasi');
				document.location.href='my_profile.php?page=user';
			</script>";
 ?>