<?php
include '../config/configuration.php';

$kode_akun       	= $_POST['kode_akun'];
$nama     			= $_POST['nama'];
$gol       			= $_POST['gol'];
$klas				= $_POST['klas'];
$saldo				= $_POST['saldo'];

$sql="INSERT INTO `tb_coa` INSERT INTO `tb_coa` (`kode_akun`, `nama`, `gol`, `klas`, `saldo`) VALUES ('$kode_akun', '$nama', '$gol', '$klas', '$saldo')";
?>

<?php echo "Berhasil"?>