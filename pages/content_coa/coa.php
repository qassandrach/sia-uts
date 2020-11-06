
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="?content=coa_tambah" class="btn btn-info">Tambah</a>
         </div>
            <table class="table table-bordered">
               <tr>
                  <th class="info">Kode Akun</th>
                  <th class="info">Nama Akun</th>
				  <th class="info">Golongan</th>
				  <th class="info">Klasifikasi</th>
				  <th class="info">Saldo</th>
                  <th class="info" colspan="2">Action</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    $product = mysqli_query($conn, "SELECT * from tb_coa");
    foreach ($product as $result){
		echo "<tr>
				<td>".$result['kode_akun']."</td>
				<td>".$result['nama']."</td> 
				<td>".$result['gol']."</td> 
				<td>".$result['klas']."</td> 
				<td>RP. ".number_format($result['saldo'])."</td> 
				<td><a href='?content=coa_edit&kode_akun=$result[kode_akun]'>edit</a></td>
                <td><a href='?content=coa_delete&kode_akun=$result[kode_akun]'>delete</a></td>
				</tr>";
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