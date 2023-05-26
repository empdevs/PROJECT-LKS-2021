<html>
<head>
		<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>





	<nav class="nav">

		<div class="home">Home</div>
		<div class="about">About Us</div>
		<div class="me">Contact Us</div>
		<div class="log"><a href="login/index.php"><button> LOG IN </button></a></div>
		
		<div class="daftar">
			<a href="daftar/index.php"><button> SIGN UP </button></a>
		</div>

		

	</nav>


	<?php 
	session_start();

	include 'config.php';

	$query = mysqli_query($conn, "SELECT * FROM data WHERE role='user' ");

	$result = mysqli_num_rows($query);


	?>



	<header class="header">
				
			<div class="header-title">
				<h1>AYO VAKSIN</h1><br><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur..</p>
				<br><br>
				<p>jumlah peserta terdaftar: <?php echo $result; ?></p>
			</div><br>
			<div class="header-img">
				<img src="img/9.jpg" width="500px" >
			</div>


	</header>


	


























	<!-- <div class="nav">

		<div class="nav-container">
				<div class="nav-brand">
					vaksin.in
				</div>

				<div class="nav-item">
					<div>
						<img src="img/bantenlogo.png" width="60px">
					</div>
					<div>
						
					</div>
				</div>

				<div >
					<a href="daftar/index.php"><button class="nav-btn">
						DAFTAR
					</button></a>
				</div>
		</div>

	</div>

	

	<div class="container">
		
		<div class="content">
			<div>Vaksin Aman dan Halal</div>
			<img src="img/17.jpg"> 
				
			
		</div>

	</div>
 -->





	
</body>

</html>