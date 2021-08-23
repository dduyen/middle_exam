<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="./imgs/logo.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img style="width:100%;" src="./imgs/dai-hoc-thuy-loi-12a-7434-1527919788.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center h6">Login</small>
                        <div class="line"></div>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label> <br>
                            <input name="email" type="email" class="col-8" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label> <br>
                            <input name="password" type="password" class="col-8" id="exampleInputPassword1">
                        </div>
                        
                        <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button name="submit" type="submit" class="btn btn-primary text-center">Login</button> </div>
                    </form>
                </div>
                    
                   
            </div>
        </div>
       
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include("./connect.php"); 
    session_start();
    if(isset($_POST['submit'])){
        $email= $_POST['email'];
        $pass_word = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE email='$email' AND pass_word='$pass_word'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count == 1){
            $_SESSION['login']= $email;
            header('Location:http://localhost/test/admin.php');
        }
        else{
        }
    } 
    // phpinfo();
