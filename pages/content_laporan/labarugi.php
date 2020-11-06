    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?content=home">Home</a></li>
         <li class="active">Laporan</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:656px">
 <br>
 <center><p style="font-size:160%;font-weight: bold">Laporan Laba Rugi </p></center>
  <p style="font-size:140%;font-weight: bold"> Pendapatan </p>
            <table class="table table-bordered">
               <tr>
				<th class="info">Kode Akun</th>
				<th class="info">Nama Akun</th>
				<th class="info">Total</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    $product = mysqli_query($conn, "SELECT * FROM `tb_coa` WHERE kode_akun between '41101' and '41401'");
    foreach ($product as $result){
		echo "<tr>
				<td>".$result['kode_akun']."</td>
				<td>".$result['nama']."</td>
				<td>RP. ".number_format($result['saldo'])."</td> 
				</tr>";
	}
		?>
	<?php
	$harga_total = 0;	
	$sql = mysqli_query($conn,"SELECT * FROM `tb_coa` WHERE kode_akun between '41101' and '41401'");
	while($data=mysqli_fetch_assoc($sql)) {
	$harga_total += $data['saldo'];
	}
	?>
		<tr>
		 <td colspan="2" style="text-align: left; font-size: 17px;"><b>Total Nominal :</b></td>
		<td style="font-size: 17px; text-align: left; "><?php echo " Rp." . number_format($harga_total).",-"; ?></td>
		</tr>

            </table>
			    <p style="font-size:140%;font-weight: bold"> Biaya Umum </p>
            <table class="table table-bordered">
               <tr>
				<th class="info">Kode Akun</th>
				<th class="info">Nama Akun</th>
				<th class="info">Total</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    $product = mysqli_query($conn, "SELECT * FROM `tb_coa` WHERE kode_akun between '51101' and '51102'");
    foreach ($product as $result){
		echo "<tr>
				<td>".$result['kode_akun']."</td>
				<td>".$result['nama']."</td>
				<td>RP. ".number_format($result['saldo'])."</td> 
				</tr>";
	}
		?>
	<?php
	$jml = 0;	
	$sql = mysqli_query($conn,"SELECT * FROM `tb_coa` WHERE kode_akun between '51101' and '51102'");
	while($data=mysqli_fetch_assoc($sql)) {
	$jml=$jml+$data['saldo'];
	}
	?>
		<tr>
		 <td colspan="2" style="text-align: left; font-size: 17px;"><b>Total Nominal :</b></td>
		<td style="font-size: 17px; text-align: left; "><?php echo " Rp." . number_format($jml).",-"; ?></td>
		</tr>

            </table>
			<p style="font-size:140%;font-weight: bold"> Total Laba Rugi </p>
            <table class="table table-bordered">
               <tr>
				<th class="info">Kode Akun</th>
				<th class="info">Nama Akun</th>
				<th class="info">Total</th>
               </tr>
			   <?php
    include '../config/configuration.php';
	$laba = 0;	
	$sql = mysqli_query($conn,"SELECT * FROM `tb_coa`");
	while($data=mysqli_fetch_assoc($sql)) {
	$laba=$harga_total-$jml;
	}
	?>
		<tr>
		 <td colspan="2" style="text-align: left; font-size: 17px;"><b>Total Nominal :</b></td>
		<td style="font-size: 17px; text-align: left; "><?php echo " Rp." . number_format($laba).",-"; ?></td>
		</tr>

            </table>

   </div>