<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="adm.css">
    <link rel="stylesheet" type="text/css" href="in.css">
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
<br><br><br><br><br>
<center>
    <div class="card mx-auto" style="width:350px">
    <?php
        include 'koneksi.php';

        $biaya=$_GET['biaya'];
        $bayar=$_GET['bayar'];
        $kembali=$bayar-$biaya;

        if($kembali>0){
            echo "<h1 class='b'>KEMBALIAN ANDA</h1><br>";
            echo "<h3 class='judul'>Rp. ".$kembali."</h3>";
            echo "<a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
        }
        else if($kembali==0){
            echo "<h1 class='b'>PEMBAYARAN SELESAI</h1><br>";
            echo "<a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
        }
        else if($kembali!=0){
            echo "<h1 class='b'>UANG ANDA KURANG</h1><br>";
            echo "<a href='tampil.php' class='btn btn-primary'>ULANGI TRANSAKSI</a>";
        }
        else{
            echo "GAGAL";
        }
        
    ?>
    </div>
    <br>
</center>
<br>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>