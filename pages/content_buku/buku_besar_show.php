<?php 
include '../config/configuration.php';

$nama_akun = $_POST['nama_akun'];
?>
 <br>
 <center><p style="font-size:160%;font-weight: bold">Buku Besar <?php echo "$nama_akun"?> </p></center>
 <div class="col-md-10" style="min-height:600px">

            <table class="table table-bordered">
               <tr>
				<th class="info">Tanggal Transaksi</th>
                  <th class="info">Debit</th>
				  <th class="info">Kredit</th>
          <th class="info">Saldo</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    
    $product = mysqli_query($conn, "SELECT * FROM tb_bukubesar WHERE nama='$nama_akun'");
    foreach ($product as $result){
		echo "<tr>
				<td>".$result['tgl']."</td>
				<td>".$result['debit']."</td> 
				<td>".$result['kredit']."</td> 

				</tr>";
  }
    ?>
    	<?php
	$nama_akun = $_POST['nama_akun'];
  $saldo_debit = 0;	
  $saldo_kredit = 0;	
	$sql = mysqli_query($conn,"SELECT * FROM tb_bukubesar WHERE nama='$nama_akun'");
	while($data=mysqli_fetch_assoc($sql)) {
  $saldo_debit += $data['debit'];
  $saldo_kredit += $data['kredit'];
	}
	?>

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