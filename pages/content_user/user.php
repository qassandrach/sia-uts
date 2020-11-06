    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?content=home">Home</a></li>
         <li class="active">Data User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="?content=user_tambah" class="btn btn-info">Tambah</a>
         </div>
            <table class="table table-bordered">
               <tr>
				  <th class="info">ID</th>
                  <th class="info">Nama User</th>
                  <th class="info">Level</th>
                  <th class="info" colspan="2">Action</th>
               </tr>
			   <?php
    include '../config/configuration.php';
    $user = mysqli_query($conn, "SELECT * from tb_user");
    foreach ($user as $row){
		echo "<tr>
				<td>".$row['id_user']."</td>
				<td>".$row['nama']."</td>
				<td>".$row['level']."</td> 
				<td><a href='?content=user_edit&username=$row[username]'>edit</a></td>
                <td><a href='?content=user_delete&username=$row[username]'>delete</a></td>
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