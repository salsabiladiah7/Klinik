<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="yaa.css";>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .container{
        width: 40%;
        margin-top: 7%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px;
    }
    button{
        width: 49%;
    }
    a{
        width: 49%;
    }
</style>
<body>
<?php
    include 'koneksi.php';
    $id = $_GET['id_pemesanan'];

    $sql="SELECT*FROM pesanan WHERE id_pemesanan='$id'";
    $query=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($query);
?>s

<div class="container">
<center><h3 style="color:#edfefd">FORM PEMBAYARAN</h3></center>
        <form action="bayar.php" method="GET">
            <div class="form-group"><br>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Masukan Nominal Uang" id="bayar" name="bayar">
                    </div>
            </div>
            <td><input type="hidden" name="biaya" value="<?php echo $row['biaya'];?>" class="form-control"></td>
            <a href="tampil.php" class="btn btn-secondary"> BACK </a>
            <button type="submit" class="btn btn-primary float-right"> KIRIM </button><br><br>
        </form>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>