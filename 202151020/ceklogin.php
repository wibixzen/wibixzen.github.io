<?php 
session_start();
include 'config.php';

$nim = $_POST['nim'];
$pass = $_POST['password'];

if ($nim == "") {
	header("location:login.php?nim=kosong");
}

$data = mysqli_query($conn,"select * from mahasiswa where nim='$nim'and password='$pass'");


$cek = mysqli_num_rows($data);

if(mysqli_num_rows($data) == 0 ){
    echo("nim atau password salah");
}else{
    $_SESSION['mahasiswa'] = 1;
    header("Location: dashboarduser.html");
}
?>