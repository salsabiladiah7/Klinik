<?php
    include 'koneksi.php';
    
    $nama=$_POST['namaa'];
    $telpp=$_POST['telpp'];
    $email=$_POST['email'];
    $pesan=$_POST['pesan'];

    $sql="INSERT INTO pesanan (namaa,telpp,email,pesan) VALUES ('$nama','$telpp','$email','$pesan')";
    $query= mysqli_query($connect,$sql);
    $cek= mysqli_affected_rows($connect);
    if($cek>0){
        header("location:tampil.php");
    }
    else{
        echo "GAGAL TAMBAH PESANAN".mysqli_connect_error();
    }
?>