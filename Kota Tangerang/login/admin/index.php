<?php

session_start();
	if(!isset($_SESSION['login'])){
		header("location:../index.php?pesan=belum");
	}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>

	<!-- <div class="brand">
		<div>hello <?php //echo $_SESSION['nama']; ?></div>
		<div>role: <?php //echo $_SESSION['role']; ?></div>
	</div> -->

	<div class="nav">

		<div class="nav-container">
				<div class="nav-brand">
					<div>nama: <?php echo $_SESSION['nama']; ?></div>
					
						<div>
							<a href="tambah.php">
								<button class="submitt"> tambah peserta</button>
							</a>
						</div>
					
				</div>

				<div class="nav-item">
					<div>
						<img src="../../img/bantenlogo.png" width="60px">
					</div>
					<div>
						
					</div>
				</div>

				<div >
					<div class="nav-brand">
						<div>role: <?php echo $_SESSION['role']; ?></div>
						<div>
							<a href="logout.php">
								<button class="reset"> logout </button>
							</a>
						</div>
					</div>
				</div>
		</div>

	</div>
	
	
	<br>
	<br>

	<!-- <div class="data"><h2 >daftar peserta</h2></div> -->

	<br>
	<br>

	


	<br>

	
		
	<table border="1">


		<tr>
			<th>no</th>
			<th>nama</th>
			<th>nama keluarga</th>
			<th>nik</th>
			<th>umur</th>
			<th>telepon</th>
			<th>alamat_email</th>
			<th>alamat</th>
			<th>kota</th>
			<th>provinsi</th>
			<th>tempat</th>
			<th>jadwal</th>
			<th>option</th>
		</tr>

		<tr>

			<?php
			include 'config.php';
			$no = 1;



			$result = mysqli_query($conn, "SELECT * FROM data WHERE role='user' ");

			while($d = mysqli_fetch_array($result)) {
					
				

		?>
			<td><?php echo $no++; ?> </td>
			<td><?php echo $d['nama_depan']; ?></td>
			<td><?php echo  $d['nama_keluarga'];?></td>
			<td><?php echo  $d['nik'];?></td>
			<td><?php echo  $d['umur'];?></td>
			<td><?php echo  $d['telepon'];?></td>
			<td><?php echo  $d['alamat_email'];?></td>
			<td><?php echo  $d['alamat'];?></td>
			<td><?php echo  $d['kota'];?></td>
			<td><?php echo  $d['provinsi'];?></td>
			<td><?php echo $d['tempat']; ?></td>
			<td><?php echo $d['jadwal']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">
					<button class="submit">
						edit
					</button>
				</a>

				<a href="hapus.php?id=<?php echo $d['id']; ?>">
					<button class="reset" >

						hapus

					</button>
				</a>

			</td>
		</tr>


			<?php } ?>
		
	</table>



	</div>
	<br>
	<br>
	

</body>
</html>