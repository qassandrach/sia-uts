 <div class="col-md-10" style="min-height:600px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?content=home">Home</a></li>
    <li class="breadcrumb-item"><a href="?content=coa">Data COA</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit COA</li>
  </ol>
</nav>
<?php
							include '../config/configuration.php';
                            $result = mysqli_query($conn, "SELECT * FROM `tb_coa` WHERE kode_akun='$_GET[kode_akun]'");
                            $row = mysqli_fetch_assoc($result);
                        ?>
		<h2>COA Details</h2>
		<hr>		
		<form action="?content=coa_editaksi" method="post">
	
			<div class="form-group">
				<label>Kode Akun</label>
					<input type="number" name="kode_akun" class="form-control" value="<?php echo $row['kode_akun'] ?>" readonly>
			</div>
			<div class="form-group">
				<label>Nama Akun</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
			</div>
			<div class="form-group">
				<label>Golongan Akun</label>
					<select name="gol" class="form-control" required>
					<option value="Debet">Debet</option>
					<option value="Kredit">Kredit</option>
                                                  
					</select>
			</div>
						<div class="form-group">
			<label>Jenis Klasifikasi Akun</label>
                                                    <select name="klas" class="form-control" required>
                                                    <option selected value="">Pilih Jenis Klasifikasi Akun</option>
                                                    
													<option value="Aktiva">Aktiva</option>
                                                    <option value="Pasiva">Pasiva</option>
                                                    <option value="Ekuitas">Ekuitas</option>
                                                    <option value="Pendapatan">Pendapatan</option>
                                                    <option value="Beban">Beban</option>
                                                    </select>
			</div>
			                                                <div class="form-group">
                                                    <label>Saldo</label>
                                                    <input class="form-control" type="number" name="saldo" />
                                                </div>
			<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
				</div>
			</div>
		</form>
		
	</div>	
</body>
</html>