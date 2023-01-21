<?php
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

$query2 = "select * from student order by rollno desc limit 1";
$result2 = mysqli_query($conn,$query2);
$row = mysqli_fetch_array($result2);
$last_id = $row['rollno'];
if ($last_id == "")
{
    $customer_ID = "CUSTB1";
}
else
{
    $customer_ID = substr($last_id, 5);
    $customer_ID = intval($customer_ID);
    $customer_ID = "CUSTB" . ($customer_ID + 1);
}
    
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sname = $_REQUEST['sname'];
    $fname = $_REQUEST['fname'];
    $cname = $_REQUEST['cname'];
    $gname = $_REQUEST['gname'];
    $dk = $_REQUEST['dk'];
    $ename = $_REQUEST['ename'];
    $mname = $_REQUEST['mname'];
    $aname=$_REQUEST['aname'];
    $stname = $_REQUEST['stname'];
    $dname = $_REQUEST['dname'];
    $pinname = $_REQUEST['pinname'];
    $qname = $_REQUEST['qname'];
    $zname = $_REQUEST['zname'];
}


// Variables to be inserted into the table

$sname = $_REQUEST['sname'];
    $fname = $_REQUEST['fname'];
    $cname = $_REQUEST['cname'];
    $gname = $_REQUEST['gname'];
    $dk = $_REQUEST['dk'];
    $ename = $_REQUEST['ename'];
    $mname = $_REQUEST['mname'];
    $aname=$_REQUEST['aname'];
    $stname = $_REQUEST['stname'];
    $dname = $_REQUEST['dname'];
    $pinname = $_REQUEST['pinname'];
    $qname = $_REQUEST['qname'];
    $zname = $_REQUEST['zname'];
$sql="INSERT INTO `student` ( `rollno`,`Studentname`, `fathersname`, `dob`, `gender`, `degree`, `email`, `mobileno`, `address`, `state`, `district`, `pincode`, `Qualification`, `percentage`) VALUES ('$customer_ID' ,'$sname', '$fname', '$cname', '$gname', '$dk', '$ename', '$mname', '$aname', '$stname', '$dname', '$pinname', '$qname', '$zname')";
// Add a new trip to the Trip table in the database
$result = mysqli_query($conn, $sql);


        




session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sucess</title>

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

</head>
<body>
<title>Thanks for Sumbmitting your Details</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading text-center" >Thanks for Submitting your Details <br> <br>  Your Roll no is <?php echo $customer_ID;?> </h4>
      <br></br>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>





</html>
<?php

