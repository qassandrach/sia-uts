<?php
include '../config/configuration.php';

$nama       	= $_POST['nama'];
$username       = $_POST['username'];
$level	        = $_POST['level'];
$password       = md5($_POST['password']);
 

if($nama=="" || $username=="" || $password=="" || $level=="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="tambah.php";
    </script>
    <?php
}

else
{
    $sql="INSERT INTO tb_user VALUES ('','$nama','$username','$level','$password')";
             
    if($conn->query($sql) === false) {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=user";
        </script>
        <?php
    }
}?>