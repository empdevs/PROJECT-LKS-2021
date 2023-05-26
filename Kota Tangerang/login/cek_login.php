<?php

session_start();
include 'config.php';


$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars(md5($_POST['password']));


$query = mysqli_query($conn,"SELECT * FROM data WHERE username='$user' and password='$pass' ");

$result = mysqli_num_rows($query);



if($result > 0){



	$query2 = mysqli_fetch_array($query);

	if($query2['role'] == 'admin'){

		$_SESSION['login'] = $user;
		$_SESSION['nama'] = $query2['nama_depan'];
		$_SESSION['role'] = $query2['role'];

		header("location:admin/index.php");

	} else {


		$_SESSION['login'] = $user;
		$_SESSION['nama'] = $query2['nama_depan'];
		$_SESSION['role'] = $query2['role'];
		$id = $query2['id'];

		header("location:user/index.php?id=$id");


	}
} else {
	header("location:index.php?pesan=gagal");
}

 





?>