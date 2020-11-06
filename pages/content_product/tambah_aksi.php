<?php
include '../config/configuration.php';

$nama_transaksi       	= $_POST['nama_transaksi'];
$nominal      			= $_POST['nominal'];
$nama_akun_debit       	= $_POST['debet'];
$nama_akun_kredit		= $_POST['kredit'];
$date					= $_POST['date'];

$sql= "INSERT INTO `transaksi` (`tgl`, `nama_transaksi`, `debet`, `kredit`, `nominal`) VALUES ('$date','$nama_transaksi','$nama_akun_debit', '$nama_akun_kredit', '$nominal')";
// update table buku besar
// $sql_bukubesar = mysqli_query($conn, "INSERT INTO `tb_bukubesar` (`tgl`, `nama_transaksi`, `nama`, `debit`, `kredit`) VALUES ('$date', '$nama_transaksi', '$nama_akun_debit','$nominal', NULL), ('$date', '$nama_transaksi', '$nama_akun_kredit', NULL, '$nominal')");

// update table coa
$sql_akun_debit = mysqli_query($conn, "SELECT * FROM tb_coa where nama='$nama_akun_debit'");
while ($data_akun_debit = mysqli_fetch_assoc($sql_akun_debit)){
    
    $kode_akun_debit = $data_akun_debit["kode_akun"];
    $saldo_akun_debit = $data_akun_debit["saldo"];
    $nama_akun_debit = $data_akun_debit["nama"];
    $gol_akun_debit = $data_akun_debit["gol"];

    if ($gol_akun_debit == "Debet"){
        $sql_akun = mysqli_query($conn, "UPDATE tb_coa SET saldo = saldo + '$nominal' WHERE nama ='$nama_akun_debit'");
        $sql_buku_besar = mysqli_query($conn, "SELECT * FROM tb_bukubesar where nama='$nama_akun_debit'");
        while ($data_bukubesar_debit = mysqli_fetch_assoc($sql_buku_besar)){
            $saldo_total_debit += $data_bukubesar_debit['debit'];
            $saldo_total_kredit += $data_bukubesar_debit['kredit'];
            $saldo_update_debit = $saldo_total_debit - $saldo_total_kredit + $nominal;
            $insert_buku_debit = mysqli_query($conn, "INSERT INTO `tb_bukubesar` (`tgl`, `nama_transaksi`, `nama`, `debit`, `kredit`, `saldo`) VALUES ('$date', '$nama_transaksi', '$nama_akun_debit', '$nominal', NULL, '$saldo_update_debit')"); 
        }
    } else {
        $sql_akun = mysqli_query($conn, "UPDATE tb_coa SET saldo = saldo - '$nominal' WHERE nama ='$nama_akun_debit'");
        $sql_buku_besar = mysqli_query($conn, "SELECT * FROM tb_bukubesar where nama='$nama_akun_debit'");
        while ($data_bukubesar_debit = mysqli_fetch_assoc($sql_buku_besar)){
            $saldo_total_debit += $data_bukubesar_debit['debit'];
            $saldo_total_kredit += $data_bukubesar_debit['kredit'];
            $saldo_update_kredit = $saldo_total_debit - $saldo_total_kredit - $nominal;
            $insert_buku_debit = mysqli_query($conn, "INSERT INTO `tb_bukubesar` (`tgl`, `nama_transaksi`, `nama`, `debit`, `kredit`, `saldo`) VALUES ('$date', '$nama_transaksi', '$nama_akun_debit', NULL, '$nominal', '$saldo_update_kredit')");
        }
     }

}

$sql_akun_kredit = mysqli_query($conn, "SELECT * FROM tb_coa where nama='$nama_akun_kredit'");
while ($data_akun_kredit = mysqli_fetch_assoc($sql_akun_kredit)){

    $kode_akun_kredit = $data_akun_kredit["kode_akun"];
    $saldo_akun_kredit = $data_akun_kredit["saldo"];
    $nama_akun_kredit = $data_akun_kredit["nama"];
    $gol_akun_kredit = $data_akun_kredit["gol"];
    
    
    if ($gol_akun_kredit == "Kredit"){
        $sql_akun = mysqli_query($conn, "UPDATE tb_coa SET saldo = saldo + '$nominal' WHERE nama ='$nama_akun_kredit'");
        $sql_buku_besar = mysqli_query($conn, "SELECT * FROM tb_bukubesar where nama='$nama_akun_kredit'");
        while ($data_bukubesar_debit = mysqli_fetch_assoc($sql_buku_besar)){
            $saldo_total_debit += $data_bukubesar_debit['debit'];
            $saldo_total_kredit += $data_bukubesar_debit['kredit'];
            $saldo_update_debit = $saldo_total_debit - $saldo_total_kredit + $nominal;
            $insert_buku_debit = mysqli_query($conn, "INSERT INTO `tb_bukubesar` (`tgl`, `nama_transaksi`, `nama`, `debit`, `kredit`, `saldo`) VALUES ('$date', '$nama_transaksi', '$nama_akun_debit', '$nominal', NULL, '$saldo_update_debit')"); 
        }
        
    } else {
        $sql_akun = mysqli_query($conn, "UPDATE tb_coa SET saldo = saldo - '$nominal' WHERE nama ='$nama_akun_kredit'");
        while ($data_bukubesar_kredit = mysqli_fetch_assoc($sql_buku_besar)){
            $saldo_total_debit += $data_bukubesar_kredit['debit'];
            $saldo_total_kredit += $data_bukubesar_kredit['kredit'];
            $saldo_update_kredit = $saldo_total_debit - $saldo_total_kredit - $nominal;
            $insert_buku_kredit = mysqli_query($conn, "INSERT INTO `tb_bukubesar` (`tgl`, `nama_transaksi`, `nama`, `debit`, `kredit`, `saldo`) VALUES ('$date', '$nama_transaksi', '$nama_akun_kredit', '$nominal', NULL, '$saldo_update_kredit')");
            
        }
    }
    
}






if($conn->query($sql) === false) {
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
} else {
    ?>
     <script language="javascript">
            alert('Berhasil Disimpan');
            document.location.href="?content=product";
         </script>
 <?php  
 }


?> 
