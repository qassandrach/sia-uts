<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets//js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	
</head>
<body>
	<h1>Admin Panel Login</h1>
 	
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<center><div class="alert alert-danger">Username atau password anda salah !</div></center>';
		}else if($_GET['pesan'] == "logout"){
			echo '<center><div class="alert alert-success">Anda telah logout</div></center>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<center><div class="alert alert-danger">Anda belum login</div></center>';
		}
	}
	?>
	<div class="kotak_login">
		<p class="tulisan_login">Login Details</p>
 
		<form action="config/login.php" method="post">
			<label>Username</label>
			<br>
			<input type="text" name="username" class="form-control" placeholder="Username">
			<br>
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password">
			<br>
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>