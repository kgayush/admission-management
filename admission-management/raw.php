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


?>

