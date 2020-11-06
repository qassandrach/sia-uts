<div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?content=home">Home</a></li>
         <li class="active">Transaksi</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
 
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
         <form action="?content=buku_besar_show" method="POST">
            <div class="form-group">
            
			<label></label>
					<select name="nama_akun" class="form-control" required>
					<?php
					include '../config/configuration.php';
					$nama_akun = mysqli_query($conn, "SELECT * from tb_coa");
					foreach ($nama_akun as $result){
					?>
					<option value="<?php echo $result['nama'];?>"><?php echo $result['nama']; ?></option>
					<?php } ?>
					</select>
            </div>
            <div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" value="LIHAT BUKU">
				</div>
                    </form>
         </div>
            
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