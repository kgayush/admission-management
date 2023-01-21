
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

    <title>Edit </title>

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
<title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  
    <?php require 'adminnav.php' ?>
    
    <div class="container my-2">
     <h1 class="text-center"> Edit Student Details</h1>
     <br>
     <form  class="form-horizontal"  action="" method="POST">
     <div class="form-group" style="
    display: flex;
    flex-direction: column;
    align-items: center;
">
        <div class="form-group">
       
  <?php
      

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful



$ids=$_GET['id'];
$query="select  * from student where rollno='$ids'";

$showdata = mysqli_query($conn,$query);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){

  $ids=$_GET['id'];
    $sname = $_POST['sname'];
    $fname = $_POST['fname'];
    $cname = $_POST['cname'];
    $gname = $_POST['gname'];
    $dk = $_POST['dk'];
    $ename = $_POST['ename'];
    $mname = $_POST['mname'];
    $aname=$_POST['aname'];
    $stname = $_POST['stname'];
    $dname = $_POST['dname'];
    $pinname = $_POST['pinname'];
    $qname = $_POST['qname'];
    $zname = $_POST['zname'];


  
// Variables to be inserted into the table



$aquery=" UPDATE  `student` SET  `rollno`='$ids' , `Studentname`='$sname', `fathersname`='$fname', `dob`='$cname', `gender`='$gname', `degree`='$dk', `email`='$ename', `mobileno`='$mname', `address`='$aname' , `state`='$stname' , `district`='$dname', `pincode`='$pinname', `Qualification`='$qname', `percentage`='$zname' WHERE  `rollno`='$ids'";
$result = mysqli_query($conn, $aquery);

if ($aquery){
  
   
    
  header("location: display.php");
  
  ?>
 
  <script>
    alert("Data Updated Sucessfully");
    </script>
  <?php
}
else{
  ?>
  <script>
    alert("data uppdate");
    </script>
 <?php
}

}

?>


        <div class="form-group col-md-8">
        
            <label   for="username">Student name</label>
            
            <input required type="text" class="form-control" id="username" name="sname" aria-describedby="emailHelp" value="<?php echo $arrdata['Studentname']; ?>" >
            
        </div>
        <br></br>
        <div class="center">
        <div class=" col-md-8">
            <label for="text">Father's Name</label>
            <input required type="text" class="form-control" id="text" name="fname" value="<?php echo $arrdata['fathersname']; ?>" >
        </div>
        <br>
        <div class="form-group col-md-8">
            <label for="date">Date of Birth</label>
            <input required type="date" class="form-control" id="text" name="cname" value="<?php echo $arrdata['dob']; ?>">
        </div>
        
        <br></br>
        <label>Gender</label>
<select name="gname" >
<option  > <?php echo $arrdata['gender']; ?></option>
  <option value="Male">Male</option>
  <option value="Female" >Female</option>
  <option value="Others" >Others</option>
</select>

    
<Label> Degree</label>
<select name="dk"  >
<option > <?php echo $arrdata['degree']; ?></option>
  <option value="Bsc (Physical Science)">Bsc (Physical Science)</option>
  <option value="Bsc(Major Maths)" >Bsc(Major Maths)</option>
  <option value="Bsc (Major Physics)">Bsc (Major Physics)</option>
  <option value="Bsc (Major Physics)">Bsc (Major Chemistry)</option>
</select>
<br></BR>

<div class="form-group col-md-8">
            <label for="text">Email id</label>
            <input required type="email" class="form-control" id="text" name="ename" value="<?php echo $arrdata['email']; ?>">
        </div>
        <br></br>
<div class="form-group">
<div class="form-group col-md-8">
            <label for="int">Mobile No</label>
            <input required type="int" class="form-control" id="tel" name="mname" value="<?php echo $arrdata['mobileno']; ?>">
        </div>
        <BR>
        <div class="form-group col-md-8">
            <label for="text">Address</label>
            <input required type="text" class="form-control" id="text" name="aname" value="<?php echo $arrdata['address']; ?>">
        </div>
<br></br>
        <Label> State</label>
<select name="stname">
<option > <?php echo $arrdata['state']; ?></option>
  <option required value="Uttar Pradesh">Uttar Pradesh</option>
 
</select>

<Label> District</label>
<select required name="dname">
<option > <?php echo $arrdata['district']; ?></option>
<option value="Azamgarh">Azamgarh</option>
  <option value="Ballia">Ballia</option>
  <option value="Chandauli">Chandauli</option>
  <option value="Devaria">Devaria</option>
  <option value="Ghazipur">Ghazipur</option>
  <option value="Gorakhpur">Gorakhpur</option>
  <option value="Jaunpur">Jaunpur</option>
  <option value="Lucknow">Lucknow</option>
  <option value="Mau">Mau</option>
  <option value="Mirzapur">Mirzapur</option>
  <option value="Varanasi">Varanasi</option>
</select>
<br></br>
<div class="form-group col-md-8">
            <label for="int">Pincode</label>
            <input required type="int" class="form-control" id="text" name="pinname" value="<?php echo $arrdata['pincode']; ?>">
        </div>
<br></BR>

<Label> Qualification</label>
<select required name="qname">
<option > <?php echo $arrdata['Qualification']; ?></option>
  <option value="10th">10th</option>
  <option value="12th">12th</option>
</select>
<br></br>
<div class="form-group col-md-4">
            <label for="int">Obtained %</label>
            <input required type="int" class="form-control" id="text" name="zname" placeholder="90" value="<?php echo $arrdata['percentage']; ?>">
        </div>
        <br>


        
        
        <form>
        <form>
  

<button type="submit" class="btn btn-primary" name="submit">Update</button>
</div>


    
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

