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
        margin-top: 3%;
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
<br>
<h1 class="text-center" style="color:white">REGISTER CUSTOMER</h1>
<div class="container">
        <form action="customReg2.php" method="POST">
            <div class="form-group">
                <label for="uname">Nama:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="uname">No.Telp:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">+62</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Nomor Telp" id="telp" name="telp">
                </div>
            </div>
            <div class="form-group">
                <label for="uname">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd">
            </div>
            <a href="login.php" class="btn btn-secondary"> BACK </a>
            <button type="submit" class="btn btn-primary float-right"> REGISTER </button><br><br>
            <a href="customLog.php" style="color:white">Sudah Punya Akun?</a>
        </form>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>