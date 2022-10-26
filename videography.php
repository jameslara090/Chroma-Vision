<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/cvlogo.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">
  <title>Videography | Chroma Vision Photography</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/custom/custom.css">
  <script src="assets/disablekey/disable.js"></script>
  <style>

  </style>
  
  
</head>
<body>
<section class="menu cid-r8Uu1CFS7V" once="menu" id="menu1-n">

<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm nav-hover">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <div class="menu-logo">
        <div class="navbar-brand">
            <span class="navbar-logo">
            <a href="#">
                 <img src="assets/images/cblogo-273x68.png" alt="Chroma Visiom" title="" width="200" height="50">
            </a>
        </span>

        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <li class="nav-item">
                <a class="nav-link link text-white display-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="getintouch.php" >GET IN TOUCH</a></li>
            <li class="nav-item dropdown"><a class="nav-link link menu-active dropdown-toggle display-4" href="portfolio.php" data-toggle="dropdown-submenu" aria-expanded="false">PORTFOLIO</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="photography.php">Photography</a><a class="text-white dropdown-item display-4" href="videography.php">Videography</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="admin/dark/clientlogin.php" target="">CLIENT ACCESS</a></li>
            <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="services.php" data-toggle="dropdown-submenu" aria-expanded="false">BOOK ONLINE</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="servicespackages1.php">Photography Packages</a><a class="text-white dropdown-item display-4" href="videopackages.php">Video Packages</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="about.php">ABOUT</a></li>
        </ul>

    </div>
</nav>
</section>

<section class="mbr-section content5 cid-r9VX98BY7d mbr-parallax-background" id="content5-1p">

<div class="mbr-overlay" style="opacity: 0.5; background:#1c2224fa;">
        </div>


    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Wedding Cinema</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-7">by Chroma Vision</h3>
                
                
            </div>
        </div>
    </div>
</section>
<?php
include('db.php');
$query = "SELECT * FROM video ORDER BY v_id";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row){
    echo'
    <section class="header7 cid-r9VWt4bHUK" id="header7-1n">
        <div class="container">
            <div class="media-container-row">
    
                <div class="media-content align-right text-center">
                        <h3 class="text-white p-top">'.$row["name"].'</h3>
                        <p class="mbr-text mbr-fonts-style display-7 text-white pt-30" >
                        '.$row["description"].'     
                        </p>
                </div>
                <div class="mbr-figure" style="width: 120%;">   
            <video width="600" hieght="130" controls>
               <source src="admin/dark/photos/'.$row["filename"].'" type="video/mp4">
               <source src="mov_bbb.ogg" type="video/ogg">
            </video>
        </div>
        </div>
        </div>
    </section>
    ';
 }

?>
<?php include 'footer.php'; ?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>