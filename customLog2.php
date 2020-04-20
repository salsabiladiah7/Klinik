<?php
    include 'koneksi.php';

    $nama=$_POST['nama'];
    $pswd=$_POST['pswd'];

    $sql= "SELECT*FROM customer WHERE nama='$nama' and pswd='$pswd'";
    $query=mysqli_query($connect,$sql);
    $cek=mysqli_num_rows($query);
    if($cek>0){
        session_start();
        $_SESSION['nama']=$nama;
        $_SESSION['pswd']=$pswd;
        $_SESSION['status']='login';
        echo "<script>alert('LOGIN SUCCESS');location='pesan.php'</script>";
    }
    else{
        header("location:customLog.php?submit=gagal");
    }
?>