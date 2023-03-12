<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbnilai_daud";


$koneksi = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_errno()){
    echo "koneksi database gagal : ".mysqli_connect_error();
}
?>