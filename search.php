<!DOCTYPE html>

<html lang="en">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <body>
    <div class="d-flex justify-content-between" style="margin-top:2%" >
            <img class="" src="./imgs/logo.png" alt="">
            <div class="">
                <div style="display:block; margin-bottom:5%">
                    <form action="" method="get"> <button class="bg-primary" name="home">Home</button></form>
                    <img style="width:8%" src="./imgs/230px-Flag_of_North_Vietnam_(1955–1976).svg.png" alt="">
                    <img style="width:8%" src="./imgs/tải xuống.png " alt="">
                </div>
        </div>
       <?php
       session_start();
        if(isset($_GET['home'])){
            if(!isset($_SESSION['login'])){
                header('location:'.$SITEURL. 'admin.php' );
            }
            else{
                header('location:'.$SITEURL. 'index.php' );
            }
        }
       ?>
        </div class="">
            <div class="h1 d-flex justify-content-center">Search </div>
            <form action="" method="POST" class="form-group d-flex" style="margin-left:5%">
                <input  type="text" placeholder="Search" name = "inputsearch" style= "width:30%; height:45px">
                <div class="form-group" style="margin-left:2%">
                    <select class="form-control" name="selector" >
                        <option value = "fullname">Họ và tên</option>
                        <option value = "office" >Chức vụ</option>
                        <option value = "company" >Cơ quan</option>
                    </select>
                </div>
                <button class="btn-danger" style="margin-left:2%; " name="search">Search</button>
               
            </form>
            <div id="content">
                 <table class="table">
                    <thead class="thead-dark">
                        <tr >
                            <th scope="col">#</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">Di động</th>
                            <th scope="col">Cơ quan</th>
                            <th scope="col">SĐT cơ quan</th>
                        </tr>
                    </thead>
                    <?php 
                    if(isset($_POST['search']))
                        $selector = $_POST['selector'];
                        $inputsearch = $_POST['inputsearch'];
                        if($inputsearch=''){
                            echo "nhap input";
                        }
                        include"./connect.php";
                        $sql = "SELECT *
                                  FROM phonebook
                                  where fullname like '%$inputsearch%'
                                  ";
                            //Execute the Query
                            $res = mysqli_query($conn, $sql);
                            // var_dump($res);
                            //Count rows to check whether the category is available or not
                            $count = mysqli_num_rows($res);
                            if ($count >0){

                                    while($row = mysqli_fetch_assoc($res)){ 
                                        
                                        $i=0; 
                                        ?>
                                       <tr>
                                            <th scope="row"> <?php echo $row['id']; ?></th>
                                            <td><?php  echo $row['fullname']; ?></td>
                                            <td><?php  echo $row['office']; ?></td>
                                            <td><?php  echo $row['email']; ?></td>
                                            <td><?php  echo $row['phone']; ?></td>
                                            <td><?php  echo 'a' ?></td>
                                            <td><?php  echo $row['phone_company']; ?></td>
                                            <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                     $i++;
                                    }
                                }
                                else{
                                   
                                }
                                
                    ?>
                </table>
            </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>