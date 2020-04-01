<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="admin.css";>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css//bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <center><h1>DATA KLIEN</h1>
        <table bgcolor="#aed9da" border="1" width="95%"></center>
            <tr>
                <th bgcolor="#2096ba">NAMA</th>
                <th bgcolor="#2096ba">NO.TELP</th>
                <th bgcolor="#2096ba">EMAIL</th>
                <th bgcolor="#2096ba">HARI</th>
                <th bgcolor="#2096ba">JAM</th>
                <th bgcolor="#2096ba">PESAN</th>
                <th bgcolor="#2096ba">STATUS</th>
                <th bgcolor="#2096ba">OPSI</th>
            </tr>
            <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM pesanan";
                $query = mysqli_query($connect,$sql);
                while($data=mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$data['namaa']."</td>";
                    echo "<td>".$data['telpp']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['hari']."</td>";
                    echo "<td>".$data['jam']."</td>";
                    echo "<td>".$data['pesan']."</td>";
                    echo "<td>".$data['ket']."</td>";
                    echo "<td><a href='form_update.php?id_pemesanan=".$data['id_pemesanan']."'> EDIT</a></td>";
                }
            ?>
        </table>
        <br>
        <a href="pesan.php" class="btn btn-secondary float-left">BACK</a>
        <a href="logout.php" class="btn btn-danger float-right">LOGOUT</a>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>