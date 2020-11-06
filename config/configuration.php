<?php

$databaseHost = 'localhost';
$databaseName = 'sia';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$conn){
die ("Gagal Menghubungkan dengan database:"	 .mysqli_connect_error());
}

?>