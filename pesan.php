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
<body>
<div><a href="tampil.php" class="btn btn-link float-right" style="color:#edfefd"><h5>< Lihat Data Pesanan ></h5></a></div>
<br>
<div class="container">
<br>
<center><h3 style="color:#edfefd">FORM DATA PESAN</h3></center>
    <div class="card mx-auto" style="width:450px">
        <form action="tambah_pesan.php" method="POST" style="background-color:#edfefd">
            <div class="form-group">
                <label for="uname">Nama:</label>
                <input type="text" class="form-control" id="uname" placeholder="Nama Lengkap" name="namaa">
            </div>
            <div class="form-group">
                <label for="telpp">No.Telp:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+62</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nomor Telepon" id="telpp" name="telpp">
                </div>
            </div>
            <div class="form-group">
                <label for="emaik">E-mail:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" id="mail" name="email">
                    <div class="input-group-append">
                        <span class="input-group-text">@example.com</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="hari">Hari Periksa:</label>
                <input type="text" class="form-control" id="hari" placeholder="Hari, DD-MM-YY" name="hari">
            </div>
            <div class="form-group">
                <label for="jam">Jam Periksa:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="jam" placeholder="00.00" name="jam">
                    <div class="input-group-append">
                        <span class="input-group-text">WIB</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Pesan (keluhan):</label>
                <textarea class="form-control" rows="6" id="comment" name="pesan"></textarea>
            </div>
            <a href="customLog.php" class="btn btn-secondary"> BACK </a>
            <button type="submit" class="btn btn-primary float-right"> KIRIM </button><br><br>
        </form>
    </div>
<br>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>