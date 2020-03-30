<?php 
    $host="localhost";
    $username="root";
    $password="";
    $database="klinik";

    $connect=mysqli_connect($host,$username,$password,$database);
    if(!$connect){
        echo "Koneksi Gagal".mysqli_connect_error();
    }
?>