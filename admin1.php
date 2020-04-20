<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="adm.css";>
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
<br><br>
<h1 class="text-center" style="color:white">FORM LOGIN ADMIN</h1>
<div class="container">
    <?php
        if(isset($_GET['submit'])){
            if($_GET['submit']=="gagal"){
                echo "<div class='alert alert-danger'<strong>LOGIN GAGAL!</strong> please re-enter data</div>";
            }
        }
    ?>
    <form method="POST" action="admin2.php">
            <div class="form-group">
                <label>ID Admin:</label>
                <div class="input-group">
                    <div class="input-group-prepend"> 
                    </div>
                <td><input type="text" name="id" class="form-control" placeholder="Masukkan ID"></td>
                </div>
            </div>
             <div class="form-group">
                <label>Username:</label>
                <div class="input-group">
                    <div class="input-group-prepend"> 
                    </div>
                <td><input type="text" name="user" class="form-control" placeholder="Masukkan Username"></td>
                </div>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <div class="input-group">
                    <div class="input-group-prepend">            
                    </div>
                <td><input type="password" name="pass" class="form-control" placeholder="Masukkan Password"></td>
                </div>
    </div>
                <a href="login.php" class="btn btn-secondary"> BACK </a>
                <button type="submit" value="LOGIN" class="btn btn-primary">LOGIN</button>
      </form>
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./asset/bootstrap-4.4.1-dist/js/bootsrtap.js"></script>
</body>
</html>