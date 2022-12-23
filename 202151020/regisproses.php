<?php 
include 'config.php';

$nim=$_POST['nim'];
$nama=$_POST['nama']; 
$password=$_POST['password'];
$foto=$_POST['foto'];

if ($nim== "") {
	header("location:signup.php?nim=kosong");
}elseif ($nama== ""){
    header("location:signup.php?nama=kosong");
}elseif ($password== ""){
    header("location:signup.php?password=kosong");
}elseif ($foto== ""){
    header("location:signup.php?foto=kosong");
}

$query=mysqli_query ($conn,"insert into mahasiswa values('','$nim','$nama','$password','$foto')");

header("location:dashboarduser.html");
?>