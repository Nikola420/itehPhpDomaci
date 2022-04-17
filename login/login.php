<!DOCTYPE html>
<?php  
   session_start();  
   include_once '../user.php';  
   $user = new User();  
  //  if ($user->session())  
  //  {  
  //     header("location:../home/index.php");  
  //  }  

  //$_SESSION["ime"] = 
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $login = $user->login($_REQUEST['username'],$_REQUEST['password']);  
      if($login){  
         header("location:../home/index.php");  
      }
      else
      {  
         echo "<script>alert('Neuspelo')</script>";  // Mozda doraditi ovde
      }  
   }  
?>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Moviesly | Login</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="h-100">
<div class="container h-100">
<div class="row h-100 justify-content-center align-items-center">
<div class="col-10 col-md-8 col-lg-6">
<h1 class="login-header">MOVIESLY</h1>
<form id="login-form" action="" method="POST">
  <div class="form-group">
    <h1 class="login-form-header">Login</h1>
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
  </div>
  <a href="../signup/signup.php" class="register-anchor">Don't have an account? Click here to sign up.</a><br/>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>