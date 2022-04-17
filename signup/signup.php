<!DOCTYPE html>
<?php
include_once '../user.php';
$user = new User();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['terms'])){
  $signup = $user->signup($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password']);
  if ($signup) {
    header("location: ../login/login.php");
  } else {
    echo "<script>alert('Entered username already exists!')</script>";
  }
  } else{
      echo
      "<script>alert('You must accept terms!')</script>";
  }
}
?>

<html lang="en" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Moviesly | Sign Up</title>
  <link rel="stylesheet" href="./signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="h-100">
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-10 col-md-8 col-lg-6">
        <h1 class="signup-header">MOVIESLY</h1>
        <form id="signup-form" action="" method="POST" name="form1">
          <div class="form-group">
            <h1 class="signup-form-header">Sign Up</h1>
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" onblur="validateUserName()" required>
            <p id="userCheck" style="color: red;"></p>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" onblur="validateEmail(document.form1.email)" required>
            <p id="emailCheck" style="color: red;"></p>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" onblur="validatePassword()" required>
            <p id="passCheck" style="color: red;"> </p>
          </div>
          <div class="form-group">
            <label for="email">Repeat password</label>
            <input type="password" class="form-control" id="password2" placeholder="Enter password" onblur="validatePassword2()" required>
            <p id="passCheck2" style="color: red;"></p>
          </div>
          <div class="form-group">
            <input type="checkbox" name="terms" id="terms">
            <label for="terms">I agree with terms of use.</label>
          </div>
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
  <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="signup.js"></script>
</body>
</html>