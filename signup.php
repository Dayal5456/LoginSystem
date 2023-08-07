<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'partials/_dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists = false;

if(($password==$cpassword) && ($exists==false))
{
  $s12 = "INSERT INTO `client` (`username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
  $result = mysqli_query($conn, $s12);
  if($result)
  {
    $showalert = true;
    
  }
  
}
else
  {
    $showerror = true;
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
    if($showalert){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> User Created. You Can Log In Now
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
    }
    if($showerror){

      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Password Do Not Match
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>' ;
    }
?>
    <div class="container my-4">
<h1 class='text-center'> SignUp To Our Website</h1> 
<form action="/login-page/signup.php" method="post">
<div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name='username' aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name='password' aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name='cpassword'>
    <div id="emailHelp" class="form-text">Make Sure To Enter The Same Password.</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>