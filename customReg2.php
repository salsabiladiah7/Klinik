<?php
    include 'koneksi.php';

    $nama=$_POST['nama'];
    $telp=$_POST['telp'];
    $pswd=$_POST['pswd'];

    $sql= "INSERT INTO customer (nama,telp,pswd) VALUES ('$nama','$telp','$pswd')";
    $query=mysqli_query($connect,$sql);
    $num= mysqli_affected_rows($connect);

    if($num>0){
        header("location:customLog.php");
    }
    else{
        echo "Gagal Tambah Data".mysqli_connect_error();
    }
?>