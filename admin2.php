<?php
    include 'koneksi.php';

    $id= $_POST['id'];
    $user= $_POST['user'];
    $pass= $_POST['pass'];

    $sql= "SELECT*FROM admin WHERE id='$id' and user='$user' and pass='$pass'";
    $query= mysqli_query($connect,$sql);
    $cek= mysqli_num_rows($query);
    if($cek>0){
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
        $_SESSION['status']='login';
        echo "<script>alert('LOGIN SUCCESS');location='admin3.php'</script>";    }
    else{
        header("location:admin1.php?submit=gagal");
    }
?>