<style>
    label{
        color:black;
        font-size:1.5rem;
    }
</style>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <form method="POST">
        <div class="container">
            <label >Họ và tên</label>
            <input type="text" class="form-control" id="fullname" name="fullname" >
        </div>
        <div class="container">
            <label>Chức vụ</label>
            <input type="text" class="form-control" id="office" name="office" >
        </div>
        <div class="container">
            <label >Email </label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="container">
            <label >Di động</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group container" >
            <label >Cơ quan</label>
            <select class="form-control" id="" name="name_company">
                <option  value="van phong khoa">van phong khoa</option>
                <option  value="bo mon toan hoc">bo mon toan hoc</option>
                <option  value="bo mon httt">bo mon httt</option>
                <option  value="bo mon ktpm">bo mon ktpm</option>
            </select>
        </div>
        <div class="container">
            <label >Số điện thoại cơ quan</label>
            <input type="text" class="form-control" id="phone_company" name="phone_company">
        </div>
        <button class="btn-primary" name="submit" style="margin-left: 48%;" type="submit" class="btn btn-primary">Insert</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>
<?php 
include "./connect.php";
if(isset($_POST['submit']))
    {
       
        $fullname = $_POST['fullname'];
        $office = $_POST['office'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $name_company = $_POST['name_company'];
       
        $phone_company = $_POST['phone_company'];
        $query = "SELECT id_company from company
                where name_company = '$name_company' ";
        $res1 = mysqli_query($conn, $query) ;
        $count = mysqli_num_rows($res1);
        if ($count >0){
            while($row = mysqli_fetch_assoc($res1)){
                $idcompany = $row['id_company'];
                $sql = "INSERT INTO phonebook SET 
                fullname = '$fullname',
                office = '$office',
                email = '$email',
                id_company ='$idcompany',
                phone = '$phone',
                phone_company = '$phone_company';
                ";
                $res = mysqli_query($conn, $sql) ;
                if($res == TRUE)
                {
                    header('location:'.SITEURL.'./admin.php');
                
                }
                else{
                    echo"error";
                }}
                    }
                }
                
    //   var_dump($query);
        
?>