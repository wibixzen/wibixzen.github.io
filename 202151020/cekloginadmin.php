<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from admin where username='$username'and password='$pass'");

if(mysqli_num_rows($data) == 0 ){
    die("username atau password salah");
}else{
    $_SESSION['admin'] = 1;
    header("Location: admin.html");
}

?>