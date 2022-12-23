<?php 
include 'config.php';

$nim=$_POST['nim'];
$nama=$_POST['nama']; 
$password=$_POST['password'];
$foto=$_POST['foto'];

$query=mysqli_query ($conn,"insert into mahasiswa values('','$nim','$nama','$password','$foto')");

header("location:dashboarduser.html");
?>
