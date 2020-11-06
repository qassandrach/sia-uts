<?php
include '../config/configuration.php';

$nama_transaksi       	= $_POST['nama_transaksi'];
$nominal				= $_POST['nominal'];
$nama_akun_debit       	= $_POST['debet'];
$nama_akun_kredit		= $_POST['kredit'];
$no_trx					= $_POST['no_trx'];


    $sql="UPDATE transaksi SET nama_transaksi='$nama_transaksi', nominal='$nominal', debet='$nama_akun_debit', kredit='$nama_akun_kredit' WHERE no_trx='$no_trx'";
             
    if($conn->query($sql) === false) {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
    } else { // Jika berhasil alihkan ke halaman tampil.php
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=product";
        </script>
        <?php
    }
?>