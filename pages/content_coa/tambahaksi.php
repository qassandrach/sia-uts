<?php
include '../config/configuration.php';

$kode_akun       	= $_POST['kode_akun'];
$nama     			= $_POST['nama'];
$gol       			= $_POST['gol'];
$klas				= $_POST['klas'];
$saldo				= $_POST['saldo'];

$sql="INSERT INTO `tb_coa` (`kode_akun`, `nama`, `gol`, `klas`, `saldo`) VALUES ('$kode_akun', '$nama', '$gol', '$klas', '$saldo')";


if($conn->query($sql) === false) {
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
} else {
    echo "Berhasil";
}
?>

