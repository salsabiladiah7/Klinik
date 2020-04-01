<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="in.css";>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
  span {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
  .icon{
      margin-top: 20px;
  }
</style>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="tentangKami.php"><h6> TENTANG KAMI </h6></a>
        </li>  
        <li class="nav-item">
        <a class="nav-link" href="jadwalPraktek.php"><h6> JADWAL PRAKTEK </h6></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="layanan.php"><h6> LAYANAN & TARIF </h6></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="hubungi.php"><h6> HUBUNGI KAMI </h6></a>
        </li>
    </ul>
    </div>  
    <a href="login.php" target='_blank' class="btn btn-secondary float-right">LOGIN</a>
    </nav>

    <div class="jumbotron text-center bg-info">
    <h1 class="judul display-3" style="color:white">Layanan & Tarif</h1>
    </div>

    <br>
    <div class="container">
        <div class="card-columns">
            <div class="card">
                <div class="card-body text-center">
                    <span class="rounded-circle bg-info"><h2><i class="icon fas fa-user-md" style="color:white"></i></h2></span>
                    <br><p class="card-text">PRAKTEK DOKTER</p>
                    <p class="card-text">Penanganan berbagai keluhan penyakit dan pemeriksaan kesehatan.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <span class="rounded-circle bg-info"><h2><i class="icon fas fa-medkit" style="color:white"></i></h2></span>
                    <br><p class="card-text">FARMASI</p>
                    <p class="card-text">Menyediakan berbagai obat dan alat kesehatan.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <span class="rounded-circle bg-info"><h2><i class="icon fas fa-flask" style="color:white"></i></h2></span>
                    <br><p class="card-text">LABORATORIUM</p>
                    <p class="card-text">Laboratorium klinik kami mengutamakan kualitas diagnosis dan pelayanan.</p>
                </div>
            </div>
        </div><br><br>

        <center><h4>BIAYA & TINDAKAN DOKTER UMUM</h4><center>
        <table class="table  table-striped">
            <thead bgcolor="#a4d9d6">
            <tr>
                <th>NO</th>
                <th>KETERANGAN</th>
                <th>HARGA</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1.</td>
                <td>Konsultasi</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Pelayanan Pasien Baru Rawat Jalan</td>
                <td>10000</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Pelayanan Pasien Lama Rawat Jalan</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Khitan/Smart Klamp</td>
                <td>850000</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Sunat Manual</td>
                <td>650000</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Nebulizer</td>
                <td>50000</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Suntik KB</td>
                <td>35000</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Ganti Perban</td>
                <td>45000</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Angkat Jahitan</td>
                <td>40000</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>Home Visit</td>
                <td>100000</td>
            </tr>
            </tbody>
        </table><br><br>
        <center><h4>TARIF LABORATORIUM</h4><center>
        <table class="table  table-striped">
            <thead bgcolor="#a4d9d6">
            <tr>
                <th>NO</th>
                <th>KETERANGAN</th>
                <th>HARGA</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1.</td>
                <td>Darah Lengkap</td>
                <td>92000</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Darah Rutin</td>
                <td>50000</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Hemoglobin</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Trombosit</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Leukosit</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Eritrosit</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Hematrocit</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>Golongan Darah dan Rhesus</td>
                <td>28000</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Tes Kehamilan</td>
                <td>25000</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>HIV</td>
                <td>145000</td>
            </tr>
            </tbody>
        </table><br><br>
    </div>
    <br>
    <br>
    <br>

    <div class="text-center bg-dark" style="margin-bottom:0">
    <br>
    <p style="color:white">Copyright 2020 </p>
    <br>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>