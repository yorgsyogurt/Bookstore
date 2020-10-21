<?php
include_once('user/includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>IITU Admission</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="https://campus.iitu.kz/assets/images/logo.png" width="70" height="30" alt="" loading="lazy">IITU Admission </a>
      <a class="btn btn-primary" href="user/login.php">Student Sign In</a>
        <a class="btn btn-primary" href="user/signup.php">Student Sign up</a>
          <a class="btn btn-primary" href="admin/login.php">Admin Login</a>
    </div>
  </nav>



  <!-- Masthead -->
  <header class="masthead text-white text-center">

    <div class="overlay">

    </div>
    <div class="container">

      <div class="row">
        <div class="col-xl-12 mx-auto">
          <h1 class="mb-5">Welcome to IITU Admission</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

        </div>
      </div>
    </div>
  </header>

<hr />



<!-- Posts -->
<section class="showcase">
   <div class="container-fluid p-0">
     <div class="row no-gutters">

       <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/college.jpg');"></div>

       <div class="col-lg-6 order-lg-1 my-auto showcase-text">

      <h2>Latest posts</h2>
<ul type="none">
<?php $query=mysqli_query($con,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>
<li><a href="notice-details.php?nid=<?php echo $row['ID'];?>" target="_blank"><?php echo $row['Title'];?></a></li>
<?php } ?>
</ul>

       </div>
     </div>

     </div>
   </div>
 </section>


 <!-- Carousel  -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="https://www.iitu.kz/media/images/18_1.2e16d0ba.fill-2400x1600-c100.format-jpeg.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="https://iitu.kz/media/images/Magistratura_na.2e16d0ba.fill-2400x1600-c100.format-jpeg.jpg" class="d-block w-100" alt="...">
     </div>
     <div class="carousel-item">
       <img src="https://iitu.kz/media/images/ino_2-min.2e16d0ba.fill-2400x1600-c100.format-jpeg.jpg" class="d-block w-100" alt="...">
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>



  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">

          <p class="text-muted small mb-4 mb-lg-0">&copy; IITU 2020. All Rights Reserved.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
