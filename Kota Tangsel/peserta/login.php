<?php $a = 2;include '../header.php'; ?>

<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Login</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			

			<form action="cek_login.php" method="POST">
				<table style="width: 100%;">
					<tr>
						<td>Email </td>
						<td>:</td>
						<td><input type="text" name="email_peserta"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input required type="text" name="password_peserta"></td>
					</tr>
					<tr>
						<td><input type="Submit" name="submit" value="Login"></td>
					</tr>
				</table>
			</form>

			
		</div>
	</div>

</div>

<?php $a = 2;include '../footer.php'; ?>