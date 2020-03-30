<?php
    include 'koneksi.php';

    $id=$_GET['id_pemesanan'];
    $nama=$_POST['namaa'];
    $telp=$_POST['telpp'];
    $email=$_POST['email'];
    $pesan=$_POST['pesan'];

    $sql= "UPDATE pesanan SET namaa='$nama', telpp='$telp', email='$email', pesam='$pesan' WHERE id_pemesanan='$id'";
    $query= mysqli_query($connect,$sql);
    $num = mysqli_affected_rows($connect);
    if($num>0){
        echo "Berhasil Edit Data";
    }
    else{
        echo "Gagal Edit Data";
    }
    echo "<a href='tampil.php'>Lihat Data</a>";
?>