<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Filter</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    
</head>
<body>
<?php require 'adminnav.php' ?> 
<div class="form-group" style="
    display: flex;
    flex-direction: column;
    align-items: center;
">

<br>

<form class="form-horizontal" action="adminfilter.php"  method="post">
  <div class="form-group">
    <label class="col-lg-2 control-label">RollNo</label>
    <div class="cpl-lg-4">
    <input type="text" class="form-control" name="name"  placeholder="Enter Roll No">
</div>
</div>
<br>
<h2>OR </h2>
<br>
<div class="form-group">
    <label class="col-lg-4 control-label"> Gender</label>
    <div class="col-md-6">
    <input type="radio" name="gender" value="male">Male</input><br>
    <input type="radio" name="gender" value="female">Female</input>
</div>
</div>
<br>
<h3>OR </h3>
<br>
<div class="form-group">
    <label class="col-lg-2 control-label">course</label>
    <div class="col-lg-4">
        <select name="degree" >
            <option>Select</option>
            <option  value="Bsc (Physical Science)">Bsc (Physical Science)</option>
  <option  value="Bsc(Major Maths)" >Bsc(Major Maths)</option>
  <option  value="Bsc (Major Physics)">Bsc (Major Physics)</option>
  <option  value="Bsc (Major Physics)">Bsc (Major Chemistry)</option>
</select>
</div>
</div>
   
    
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="row">
    <table class="table table-stripted table-hover">
        <thead>
            <tr>
            <th>Roll no</th>
                <th>Student Name</th>
                <th>Father''s Name</th> 
                <th> Gender</th>
                <th>Degree</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Address</th>
                
                <th>District</th>
                <th>Pincode</th>
                <th>Qualification</th>
                <th>Percentage</th>
</tr>

</thead>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
////if(isset($_POST['submit'])){
    $sname = $_POST['name'];
    $gname = $_POST['gender'];
    $degree = $_POST['degree'];
//}

// Attempt select query execution
$sql = "SELECT * FROM student WHERE rollno='$sname' OR gender='$gname' OR  degree='$degree'  ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        //echo "<table  >";
            ////echo "<tr>";
    // echo "<th>id</th>";
              //  echo "<th>first_name</th>";
              //  echo "<th>last_name</th>";
             //   echo "<th>email</th>";
           // echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['rollno'] . "</td>";
                echo "<td>" . $row['Studentname'] . "</td>";
                echo "<td>" . $row['fathersname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['degree'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobileno'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
              
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
                echo "<td>" . $row['Qualification'] . "</td>";
                echo "<td>" . $row['percentage'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 

    else{
        echo "No records Found!!!!!.";
    }

} else{
    echo "ERROR: Could not able to execute " . mysqli_error($link);
}



// Close connection
mysqli_close($link);
?>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </table>
</body>
</html>
