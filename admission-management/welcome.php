<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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

    <title>Welcome to GC Hamirpur</title>

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
    <?php require 'partials/_nav.php' ?>
    
    
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <p style="text-align:center"> <strong>Welcome  </strong>  <?php echo $_SESSION['username']?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>
    
    
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="a.png" alt="..." /></a>
                        <div class="card-body">
                            
                            <h2 class="card-title"><h4>Netaji Subhash Chandra Bose <span> Memorial Government College</span></h4></h2>
                           
                            <p class="card-text"><p><strong>OUR VISION</strong>&nbsp;is to build a holistic and vibrant learning environment, founded on value based academic principles, to inculcate mental and spiritual strength &amp; clarity of thoughts in order to develop the character of the students.</p></p>
                            <p><strong>OUR MISSION&nbsp;</strong>is to awaken the latent potentials of the students, develop among them sense of social service, communal harmony, discipline, conscientious environment concerns, leadership and mutual co-operation, which unequivocally helps in transforming them into awakened, responsible and accountable citizen. </p>
                            
                        </div>
</div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="avia-image-overlay-wrap"><img class="avia_image" src="http://www.gchamirpur.org/wp-content/uploads/2021/07/principamimg.jpg" alt="" title="principamimg" height="300" width="400" itemprop="thumbnailUrl"></div>
                              
                    <p style="text-align:center"><strong>Dr. Anju Batta Sehgal</strong></p>
                    <p style="text-align:center"><strong>Principal</strong></p>
                    <p>Established in the Year 1965, half century ago, Netaji Subhash Chandra Bose Memorial Govt. College Hamirpur is a pioneer of higher education in the entire state. The motto of the college ‘i.e.’Bravery And Sacrifice’truly inspires our students to become a real life solider to defend and preserve our traditions and territory. I feel honoured to lead this college which stands for academic excellence,exemplary achievements in sports and cultural activities.</p>
                    <div class="card-body">
                            <div class="input-group">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Admission 2022</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="admission.php">Online Admission</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    
                    <div class="card mb-4">
                        <div class="card-header">Visitor No</div>
                        
                                    </div>
                                </body>
                            </html></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
      
        <h4  class="m-3 text-center text-white">Contact us</h4>
          <p  class="m-3 text-center text-white">N.S.C.B.M Government College Hamirpur<br> 177005
<br>gdc_hamirpur@rediffmail.com<br>

Telefax: 01972-222227</p></div>
div class="container"><p class="m-0 text-center text-white">Copyright &copy; Government College Hamirpur</p></div>

</footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

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
