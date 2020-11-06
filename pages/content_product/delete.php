<?php
include "../config/configuration.php";

$result = mysqli_query($conn, "DELETE FROM transaksi WHERE no_trx = '$_GET[no_trx]'");
$sql = mysqli_query($conn, "ALTER TABLE transaksi AUTO_INCREMENT='$_GET[no_trx]' - 1");
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=product";
        </script>
    
?>
