 <div class="col-md-10" style="min-height:600px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=product">Transaksi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Transaksi</li>
  </ol>
</nav>
<script>
  function validateForm() {
      var a = document.forms["myForm"]["nama_transaksi"].value;
      var b = document.forms["myForm"]["nominal"].value;
      if (a == "0") {
          alert("Silahkan isi nama_transaksi");
          return false;
      }
      if (b == "") {
          alert("Deskripsi Product tidak boleh kosong");
          return false;
      }
      
  }
</script>
		<h2>Tambah Transaksi</h2>
		<hr>
		
		<form name="myForm" onsubmit="return validateForm()" 
      action="?content=product_tambahaksi" method="POST" 
      enctype="multipart/form-data">
	  
		<form action="?content=product_tambahaksi" method="post">
			<div class="form-group">
				<label>Nama Transaksi</label>
					<input type="text" name="nama_transaksi" class="form-control" >
			</div>
			<div class="form-group">
				<label>Jumlah Transaksi (Rp.)</label>
					<input type="text" name="nominal" class="form-control" > </textarea>
			</div>
			<div class="form-group">
			<label>Nomor Akun Debit</label>
					<select name="debet" class="form-control" required>
					<?php
					include '../config/configuration.php';
					$akundebit = mysqli_query($conn, "SELECT * from tb_coa");
					foreach ($akundebit as $result){
					?>
					<option value="<?php echo $result['nama'];?>"><?php echo $result['nama']; ?></option>
					<?php } ?>
					</select>
			</div>
			<div class="form-group">
			<label>Nomor Akun Kredit</label>
					<select name="kredit" class="form-control" required>
					<?php
					include '../config/configuration.php';
					$akundebit = mysqli_query($conn, "SELECT * from tb_coa");
					foreach ($akundebit as $result){
					?>
					<option value="<?php echo $result['nama'];?>"><?php echo $result['nama']; ?></option>
					<?php } ?>
					</select>
			</div>
			
			 <input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">

			<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>