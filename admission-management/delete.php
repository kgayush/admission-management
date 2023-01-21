<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: admin.php");
    exit;
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$ids=$_GET['id'];
$query="DELETE FROM student WHERE rollno='$ids'";

$aquery = mysqli_query($conn,$query);

if ($aquery){  
header("location: display.php");
}
?>

