<?php
include '../config/configuration.php';

$kode_akun       	= $_POST['kode_akun'];
$nama     			= $_POST['nama'];
$gol       			= $_POST['gol'];
$klas				= $_POST['klas'];
$saldo				= $_POST['saldo'];

if($kode_akun=="" || $nama=="" || $gol=="" || $klas=="")
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
    $sql="UPDATE tb_coa SET nama='$nama', gol='$gol', klas='$klas', saldo='$saldo' WHERE kode_akun='$kode_akun'";
             
    if($conn->query($sql) === false) {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=coa";
        </script>
        <?php
    }
}?>