<img  src="partials/pl.png" ></a>
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}


echo '<nav class="navbar navbar-expand-lg navbar-white bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Welcome to Govt College Hamirpur</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/attendance/welcome.php">Home</a>
        </li>';
        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/attendance/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/attendance/signup.php">signup</a>
        </li>
      
        
        
     
        ';
        }
        if($loggedin){
        echo '
        <a class="nav-link" href="/attendance/admission.php">Online Admission 2022</a>
        </li>
        
        <a class="nav-link" href="/attendance/generator.php">Check your Roll No </a>
        </li>
        <a class="nav-link" href="/attendance/admin.php">Admin Login </a>
        </li>
        <a class="nav-link" href="/attendance/logout.php">Logout</a>
        </li>
      ';
        }
      
        echo '</ul>
        <form class="d-flex">
          
        </form>
  </div>
</nav>';
?>
