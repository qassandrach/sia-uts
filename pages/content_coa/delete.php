
<?php
include "../config/configuration.php";

$result = mysqli_query($conn, "DELETE FROM tb_coa WHERE kode_akun = '$_GET[kode_akun]'");
        ?>
        <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=coa";
        </script>
    
?>

