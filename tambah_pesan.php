<?php
    include 'koneksi.php';
    
    $nama=$_POST['namaa'];
    $telpp=$_POST['telpp'];
    $email=$_POST['email'];
    $hari=$_POST['hari'];
    $jam=$_POST['jam'];
    $pesan=$_POST['pesan'];

    $sql="INSERT INTO pesanan (namaa,telpp,email,hari,jam,pesan) VALUES ('$nama','$telpp','$email','$hari','$jam','$pesan')";
    $query= mysqli_query($connect,$sql);
    $cek= mysqli_affected_rows($connect);
    if($cek>0){
        header("location:tampil.php");
    }
    else{
        echo "GAGAL TAMBAH PESANAN".mysqli_connect_error();
    }
?>