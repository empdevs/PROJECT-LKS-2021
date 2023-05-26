<?php


require 'functions.php';

if( isset($_POST["submit"]) ) {

	if( login_admin($_POST) > 0 ){
		echo "
			<script>
				alert('Anda telah masuk menjadi admin');
				document.location.href = 'data.php';

			</script>


		";
	}


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>



	<style type="text/css">
		label {
			display: block;
		}

		button {
			margin-top: 10px;
		}


	</style>
</head>
<body>

	<h1>Login Admin</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</li> 
			<li>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</li> 
			<button type="submit" name="submit">Login</button>
		</ul>




	</form>

</body>
</html>