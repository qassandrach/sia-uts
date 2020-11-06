<?php 
include '../config/configuration.php';
?>
<html>
<head>

	<title>Edit User</title>
</head>
<body>
<div class="col-md-10" style="min-height:600px">
<?php
                            $username     = $_GET['username'];
                            $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
                            $row = mysqli_fetch_assoc($result);
                        ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=user">Data User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Information</li>
  </ol>
</nav>
	<div class="container" style="margin-top:20px">
		<h2>Information Details</h2>
		
		<hr>
		<form action="edit_aksi.php" method="post">
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama User</label>
				<div class="col-sm-5">
					<input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>" size="4" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-5">
					<input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-5">
					<input type="password" name="password" class="form-control"  required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-5">
					<select name="level" class="form-control" required>
						<option value="Administrator">Administrator</option>
						<option value="Moderator">Moderator</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="Update">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>