<?php
include '../config/configuration.php';

$nama       	= $_POST['nama'];
$username       = $_POST['username'];
$password       = md5($_POST['password']);
$level	        = $_POST['level'];
 

if($nama=="" || $username=="" || $password=="" || $level=="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="edit.php";
    </script>
    <?php
}

else
{
    $sql="UPDATE tb_user SET nama='$nama', username='$username', password='$password', level='$level' WHERE username='$username'";
             
    if($conn->query($sql) === false) {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="index.php?user";
        </script>
        <?php
    }
}?>