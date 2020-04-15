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
<br><br><br><br>
<div class="container">
<br>
    <div class="card mx-auto" style="width:350px">
        <form action="customLog2.php" method="POST" style="background-color:#edfefd">
            <div class="form-group">
                <label for="uname">Nama:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd">
            </div>
            <a href="login.php" class="btn btn-secondary"> BACK </a>
            <button type="submit" class="btn btn-primary float-right"> LOGIN </button><br><br>
        </form>
    </div>
<br>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>