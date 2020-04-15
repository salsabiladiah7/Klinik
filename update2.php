<?php
    include 'koneksi.php';

    $id=$_GET['id_pemesanan'];
    $nama=$_GET['namaa'];
    $telp=$_GET['telpp'];
    $email=$_GET['email'];
    $hari=$_GET['hari'];
    $jam=$_GET['jam'];
    $pesan=$_GET['pesan'];
    $biaya=$_GET['biaya'];
    $ket=$_GET['ket'];

    $sql= "UPDATE pesanan SET namaa='$nama', telpp='$telp', email='$email',hari='$hari',jam='$jam', pesan='$pesan', biaya='$biaya', ket='$ket' WHERE id_pemesanan='$id'";
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