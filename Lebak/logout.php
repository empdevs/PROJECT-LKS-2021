<?php 

	session_start();

	if(empty($_SESSION["login"])){
		header("Location: index.php");
		exit;
	}

	session_destroy();
	session_unset();
	$_SESSION = [];

	echo "<script>
				alert('Anda berhasil logout');
				document.location.href='index.php';
			</script>";
 ?>