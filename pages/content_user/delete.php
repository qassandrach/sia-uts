<?php
include "../config/configuration.php";

$result = mysqli_query($conn, "DELETE FROM tb_user WHERE username = '$_GET[username]'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="?content=user";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>