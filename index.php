<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (NAME,EMAIL,MOBILE_NO,PASSWORD) 
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');
        //echo "Data inserted Successfully";
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Siva Crud</title>
  </head>
  <body>


  
    <div class="container my-5">
    <form method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control"
         placeholder="Enter your Name"
         name="name" autocomplete="off">
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control"
         placeholder="Enter your email"
         name="email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control"
         placeholder="Enter your Mobile number"
         name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control"
         placeholder="Enter your Password"
         name="password" autocomplete="off">
    </div>
<br>
    <button type="submit" class="btn
    btn-primary" name="submit">Submit your response</button>
</form>
</body>