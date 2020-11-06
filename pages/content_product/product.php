    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?content=home">Home</a></li>
         <li class="active">Transaksi</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="?content=product_tambah" class="btn btn-info">Tambah</a>
         </div>
            <table class="table table-bordered">
               <tr>
				<th class="info">Nomor Transaksi</th>
				<th class="info">Tanggal Transaksi</th>
				  <th class="info">Nama Transaksi</th>
                  <th class="info">Nomor Akun Debit</th>
				  <th class="info">Nomor Akun Kredit</th>
				   <th class="info">Nominal (Rp.)</th>
                  <th class="info" colspan="2">Action</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    $product = mysqli_query($conn, "SELECT * from transaksi");
    foreach ($product as $result){
		echo "<tr>
				<td>".$result['no_trx']."</td>
				<td>".$result['tgl']."</td>
				<td>".$result['nama_transaksi']."</td> 
				<td>".$result['debet']."</td> 
				<td>".$result['kredit']."</td> 
				<td>RP. ".number_format($result['nominal'])."</td> 
	
				<td><a href='?content=product_edit&no_trx=$result[no_trx]'>edit</a></td>
                <td><a href='?content=product_delete&no_trx=$result[no_trx]'>delete</a></td>
				</tr>";
	}
	
		
		?>
	<?php
	$harga_total = 0;	
	$sql = mysqli_query($conn,"SELECT * from transaksi");
	while($data=mysqli_fetch_assoc($sql)) {
	$harga_total += $data['nominal'];
	}
	?>
		<tr>
		 <td colspan="5" style="text-align: left; font-size: 17px;"><b>Total Nominal :</b></td>
		<td style="font-size: 17px; text-align: left; "><?php echo " Rp." . number_format($harga_total).",-"; ?></td>
		</tr>

            </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>