<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "202151020";

$conn = mysqli_connect($server, $user, $password, $database);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>