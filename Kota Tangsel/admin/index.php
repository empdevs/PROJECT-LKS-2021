

<?php 
session_start();
if (@$_SESSION['id_admin']) {
	header('location:./dashboard.php');
}else{
?>




<?php $a = 2;include '../header_admin.php'; ?>


<div id="wrapper">
    <div class="hero">
	  <div class="row">
	    <div class="large-12 columns">
	      <h1>Login Admin</h1>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="large-12 column">
			<form method="post" action="cek_login.php">
			<table style="width:100%;">
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username_admin" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password_admin" required></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Login">
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>

</div>

</body>
</html>
<?php $a = 2;include '../footer.php'; ?>


<?php } ?>