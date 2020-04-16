<?php
    include 'koneksi.php';

    $id = $_GET['id_pemesanan'];

    $sql="DELETE FROM pesanan WHERE id_pemesanan='$id'";
    $query=mysqli_query($connect,$sql);
    $num=mysqli_affected_rows($connect);
    if($num>0){
        header("location:admin3.php");
    }
    else{
        echo "Gagal Hapus Data<br>";
    }
    echo "<a href='admin3.php'>Lihat Data</a>";
?>