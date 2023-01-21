<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
     $sql = "Select * from users where username='$username' AND password='$password'";
    //$sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: welcome.php");
    }
                
    else{
      $showError = "Invalid Credentials";
    }
}
        
    

  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Login</title>

  </head>
  <body>
  
      <?php require 'partials/_nav.php' ?> 
      <?php
    if($login){
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
      if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
    ?>
<br>
<div class="container my-2">

     <h1 class="text-center">Login  to our website</h1>
     <br>
     <form action="/attendance/login.php" method="post">
     <div class="form-group" style="
    display: flex;
    flex-direction: column;
    align-items: center;
">
        <div class="form-group">
        <div class="form-group col-md-20">
      
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <br>
        <div class="form-group">
        <div class="form-group col-md-20">
            <label for="password">Password</label>
            
            <input type="password" class="form-control" id="password" name="password">
            
        </div>
        
        <br>
         
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

