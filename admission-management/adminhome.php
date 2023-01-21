
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: admin.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Admin Home</title>

    
  <link rel="stylesheet" href="cards.css">
  
  </head>
  <body>
  <?php require 'adminnav.php' ?>
  <br> 
  <h1 class="text-center" style="color:blue;"> Welcome to Admin Dashboard GC Hamirpur</h1>
  <br>
  <br>
  <div class="row">
  
  <div class="column">
    
    <div class="card"><labek style="color:red;">Total No of Students</lablel>
    <?php 
        //error_reporting(0);
       // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "";
}
      $dash_adm_query ="SELECT * FROM student";
      $dash_adm_query_run= mysqli_query($conn, $dash_adm_query);

      if($adm_total=mysqli_num_rows($dash_adm_query_run)){
        echo '<h4 class="mb-0">'.$adm_total.'</h4>';

      }
      else{
        echo  '<h4 class="mb-0"> No data</h4>';
      }
   ?>
</div>
  </div>
  <div class="column">
    <div class="card"> <labek style="color:red;">Total No of Males</lablel>
    <?php

$dash_adm_query ="SELECT * FROM student  WHERE gender='Male'";
$dash_adm_query_run= mysqli_query($conn, $dash_adm_query);

if($adm_total=mysqli_num_rows($dash_adm_query_run)){
  echo '<h4 class="mb-0">'.$adm_total.'</h4>';

}
else{
  echo  '<h4 class="mb-0"> No data</h4>';
}
?>
    </div>
  </div>
  <div class="column">
    <div class="card"> <labek style="color:red;">Total No of Females</lablel> <?php

$dash_adm_query ="SELECT * FROM student  WHERE gender='female'";
$dash_adm_query_run= mysqli_query($conn, $dash_adm_query);

if($adm_total=mysqli_num_rows($dash_adm_query_run)){
  echo '<h4 class="mb-0">'.$adm_total.'</h4>';

}
else{
  echo  '<h4 class="mb-0"> No data</h4>';
}
?></div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

