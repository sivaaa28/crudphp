<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['NAME'];
$email=$row['EMAIL'];
$mobile=$row['MOBILE_NO'];
$password=$row['PASSWORD'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,NAME='$name',EMAIL='$email',MOBILE_NO='$mobile',PASSWORD='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');
        //echo "Data updated Successfully";
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
         name="name" autocomplete="off" value=<?php echo $name;?>>
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control"
         placeholder="Enter your email"
         name="email" autocomplete="off" value=<?php echo $email;?>>
    </div>
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control"
         placeholder="Enter your Mobile number"
         name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control"
         placeholder="Enter your Password"
         name="password" autocomplete="off" value=<?php echo $password;?>>
    </div>
<br>
    <button type="submit" class="btn
    btn-primary" name="submit">Update your response</button>
</form>
</body>