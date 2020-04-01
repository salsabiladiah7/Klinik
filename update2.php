<?php
    include 'koneksi.php';

    $id=$_POST['id_pemesanan'];
    $nama=$_POST['namaa'];
    $telp=$_POST['telpp'];
    $email=$_POST['email'];
    $hari=$_POST['hari'];
    $jam=$_POST['jam'];
    $pesan=$_POST['pesan'];
    $ket=$_POST['ket'];

    $sql= "UPDATE pesanan SET namaa='$nama', telpp='$telp', email='$email',hari='$hari',jam='$jam', pesan='$pesan',ket='$ket' WHERE id_pemesanan='$id'";
    $query= mysqli_query($connect,$sql);
    $num = mysqli_affected_rows($connect);
    if($num>0){
        header("location:admin3.php");
    }
    else{
        echo "Gagal Edit Data";
        echo "<a href='admin3.php'>Lihat Data</a>";
    }
?>