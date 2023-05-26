<?php

// Admin


$conn = mysqli_connect('localhost', 'root', '', 'vaksinasi');

$connP = mysqli_connect('localhost', 'root', '', 'daftar_vaksin');



// Query 

function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

// Create Data

function tambah($data) {
	global $conn;

	$gambar = htmlspecialchars($data["gambar"]);
	$nama = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$umur = htmlspecialchars($data["umur"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$email = htmlspecialchars($data["email"]);

	$query = "INSERT INTO peserta 	
				VALUES
				('', '$gambar','$nama', '$nik', '$umur', '$telepon', '$email')

			";

	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}

// Update Data

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$gambar = htmlspecialchars($data["gambar"]);
	$nama = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$umur = htmlspecialchars($data["umur"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$email = htmlspecialchars($data["email"]);

	$query = "UPDATE peserta 
				SET
			gambar = '$gambar',
			nama = '$nama',
			nik = '$nik',
			umur = '$umur',
			telepon = '$telepon',
			email = '$email'
			WHERE id = '$id'

			";

	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}


// Delete Data

function hapus($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM peserta WHERE id = '$id' ");

	return mysqli_affected_rows($conn);
}


// Search Data
function cari($keyword) {
	global $conn;

	$query = "SELECT * FROM peserta
				WHERE
			nama LIKE '%$keyword%' OR
			nik LIKE '%$keyword%' OR
			umur LIKE '%$keyword%' OR
			telepon LIKE '%$keyword%' OR
			email LIKE '%$keyword%'


			";

	$result = mysqli_query($conn, $query);

	return $result;

}





// Bagian Pendaftaran Peserta

function daftar($data) {
	global $connP;

	$depan = htmlspecialchars($data["nama-depan"]);
	$belakang = htmlspecialchars($data["nama-belakang"]);
	$nik = htmlspecialchars($data["nik"]);
	$umur = htmlspecialchars($data["umur"]);
	$telepon = htmlspecialchars($data["telepon"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$kota = htmlspecialchars($data["kota"]);
	$provinsi = htmlspecialchars($data["provinsi"]);

	$query = "INSERT INTO pendaftar 
				VALUES
			('', '$depan', '$belakang', '$nik', '$umur', '$telepon', '$email', '$alamat', '$kota', '$provinsi')
			";


	mysqli_query($connP, $query);

	return mysqli_affected_rows($connP);

}









// Bagian Login Admin

// function login_admin($admin) {
// 	global $conn_login_admin;

// 	$username = strtolower(stripslashes(htmlspecialchars($data["username"])));
// 	$password = mysqli_real_escape_string(htmlspecialchars($data["password"]));

// 	password_hash($password, PASSWORD_DEFAULT);

// 	$query = "SELECT * FROM login WHERE password = $password";

// 	$tests = [];

// 	$result = mysqli_query($conn, $query);

// 	while(	$test =  mysqli_fetch_assoc($result) ) {
// 		$tests[] = $test;
// 	}


// }











?>