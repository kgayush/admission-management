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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Student List</title>
</head>

</head>
<body>
<?php require 'adminnav.php' ?> 
  <br></br>  

  <h1 class="text-center">Student Record </h1>
  <br></br> 

    <div class="table-wrap">
<table class="table">
<thead class="thead-primary">
    
  <thead>
    <tr>
    
      
    <th scope="col" >Roll no</th>
      <th scope="col" >Student Name</th>
      <th scope="col">Father''s Name</th> 
      <th scope="col"> Gender</th>
      <th scope="col">Degree</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
      <th scope="col" >Address</th>
      <th scope="col">State</th>
      <th scope="col">District</th>
      <th scope="col">Pincode</th>
      <th scope="col">Qualification</th>
      <th scope="col">Percentage</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>      
    </tr>
  </thead>
  <tbody>
  <?php
include 'raw.php';
$selectquery =" select * from student ";
$query =mysqli_query($conn,$selectquery);

while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $res['rollno']; ?></td>
      <td><?php echo $res['Studentname']; ?></td>
      <td><?php echo $res['fathersname'];?></td>
      <td><?php echo $res['gender'];?></td>
      <td><?php echo $res['degree'];?></td>
      <td><?php echo $res['email']?>
      <td><?php echo $res['mobileno']?>
      <td><?php echo $res['address']?>
      <td><?php echo $res['state']?>
      <td><?php echo $res['district']?>
      <td><?php echo $res['pincode']?>
      <td><?php echo $res['Qualification']?>
      <td><?php echo $res['percentage']?></td>
      <td><a href="update.php?id=<?php echo $res['rollno']; ?> " data-toggle="tooltip" title="Update"><i class="fa fa-edit" style="font-size:48px;color:red"></i></a>
      <td><a href="delete.php?id=<?php echo $res['rollno']; ?> " data-toggle="tooltip" title="Delete"><i class="fa fa-edit" style="font-size:48px;color:red"></i></a>
</td>
        

        

      
      </td>
      <?php
}
?>


 </table>
</tbody>
</table>


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
  
     
      </p> 
    </div>