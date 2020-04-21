<?php
session_start();
if($_SESSION)
{
    header("Location:http://localhost/siperpus/login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <script src="http://localhost/siperpus/aset/jquery.js"></script>
    <script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>
</head>
<center><body style="background-image: url('bg.jpg'); background-size: 100%; background-repeat: no-repeat;">
    <br>
    <br>
    <br>
    <br>
    <div class="card" style="width: 30%">
        <div class="card-header">
            <h2 style="text-shadow: 2px 2px 4px grey; box-shadow: 10px 10px 5px grey;"><i class="fas fa-user"></i>Form Login</h2>
                <div class="card-body" style="width: 50%">
                <form action="proses-login.php" method="post">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="" name="username">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" name="password">
                  </div>
                  <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                  <button type="submit" class="btn btn-primary" name="btnlogin">Submit</button>
                </form>
            </div>
        </div>
</center>
</body>
</html>