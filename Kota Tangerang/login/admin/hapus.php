<?php
session_start();

include 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM data WHERE id='$id' ");


if($result){
	header("location:index.php");
} else {
	header("location:index.php");
}




?>