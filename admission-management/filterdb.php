<div class="row">
    <table class="table table-stripted table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th> 
                <th> Email</th>
                <th>Mobileno</th>
                <th>Course</th>
</tr>
</thead>
</tbody>
<?php


include("raw.php");



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    
    $g = $_POST['g'];
    $d = $_POST['d'];

    
        echo  $query="SELECT * FROM adm ";
        exit();

       $query=mysqli_query($conn, $query);
    
            while($res=mysqli_fetch_array($query)){
                $sname = $res['sname'];
                $gname = $res['gname'];
                $ename = $res['ename'];
                $mname = $res['mname'];
                $dk = $res['dk'];
                ?>
                
    
    <tr>
      
      
      <td>
        
                <tr>
                    
                <td><?php echo $sname; ?></td>
                <td><?php echo $gname; ?></td>
                <td><?php echo $ename; ?></td>
                <td><?php echo $mname; ?></td>
                <td><?php echo $dk; ?></td>
                

                </tr>
                <?php
            }
        }
        
       
            ?>
            <
        <?php
        
    
    



?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </table>
</body>
</html>
<?php





// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "adm";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "";
}

if(isset($_POST['submit'])){
    $sname = $_POST['name'];
    $gname = $_POST['g'];
   
    $dk = $_POST['d'];

    if($name !="" || $g != "" ||  $d !=""){
          $query="SELECT * FROM adm WHERE name ='$sname' OR Gender ='$gname'  OR course='$dk' ";

       $data=mysqli_query($conn, $query) or die('error');
        if(mysqli_num_rows($data) > 0){
            while($row=mysqli_fetch_assoc($data)){
                $sname = $row['sname'];
                $gname = $row['gname'];
                $ename = $row['ename'];
                $mname = $row['mname'];
                $dk = $row['dk'];
                ?>
                <tr>
                    
                <td><?php echo $sname; ?></td>
                <td><?php echo $gname; ?></td>
                <td><?php echo $ename; ?></td>
                <td><?php echo $mname; ?></td>
                <td><?php echo $dk; ?></td>
                

                </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td> Record not found</td>
        </tr>
        <?php
        }

    }

}

?>