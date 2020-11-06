 <div class="col-md-10" style="min-height:600px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=product">Data Product</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
  </ol>
</nav>
<?php
							include '../config/configuration.php';
                            $result = mysqli_query($conn, "SELECT * FROM `transaksi` WHERE no_trx='$_GET[no_trx]'");
                            $row = mysqli_fetch_assoc($result);
                        ?>
		<h2>Product Details</h2>
		<hr>		
		<form action="?content=product_editaksi" method="post">
		<div class="form-group">
				<label>Nomor Transaksi</label>
					<input type="text" name="no_trx" class="form-control" value="<?php echo $row['no_trx'] ?>" readonly>
			</div>
			<div class="form-group">
				<label>Nama Transaksi</label>
					<input type="text" name="nama_transaksi" class="form-control" value="<?php echo $row['nama_transaksi'] ?>" >
			</div>
			<div class="form-group">
				<label>Nomor Akun Debit</label>
					<input type="text" name="debet" class="form-control" value= "<?php echo $row['debet'] ?>">
			</div>
			<div class="form-group">
				<label>Nomor Akun Kredit</label>
					<input type="text" name="kredit" class="form-control" value="<?php echo $row['kredit'] ?>" >
			</div>
						<div class="form-group">
			<label>Nominal (Rp.)</label>
			<input type="text" name="nominal" class="form-control" value="<?php echo $row['nominal'] ?>" >
			</div>

			<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>