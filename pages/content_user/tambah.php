 <div class="col-md-10" style="min-height:600px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=user">Data User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
  </ol>
</nav>
		<h2>Tambah User</h2>
		
		<hr>
		<form action="?content=user_tambahaksi" method="post">
			<div class="form-group">
				<label>Nama User</label>
					<input type="text" name="nama" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Username</label>
					<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
					<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Level</label>
					<select name="level" class="form-control" required>
						<option value="Administrator">Administrator</option>
						<option value="Moderator">Moderator</option>
					</select>
			</div>
			<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>