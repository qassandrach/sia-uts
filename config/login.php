<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<?php 
include 'configuration.php';
 
$username = $_POST['username'];
$password = ($_POST['password']);

 
$login = mysqli_query($conn, "select * from tb_user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0)
{
session_start();
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
header("location:../pages/index.php?content=home");
}else{
			header("location:../index.php?pesan=gagal");
		}
		
?>
</body> 
</html>