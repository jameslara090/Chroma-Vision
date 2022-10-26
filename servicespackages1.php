
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" 'v4.8.6, mobirise.com">
  <link rel="shortcut icon" href="images/cvlogo.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">
  <title>Wedding Packages | Chroma Vision Photography</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/custom/custom.css">
  
  
  
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
            <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="portfolio.php" data-toggle="dropdown-submenu" aria-expanded="false">PORTFOLIO</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="photography.php">Photography</a><a class="text-white dropdown-item display-4" href="videography.php">Videography</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="admin/dark/clientlogin.php" target="">CLIENT ACCESS</a></li></a></li>
            <li class="nav-item dropdown"><a class="nav-link link menu-active dropdown-toggle display-4" href="services.php" data-toggle="dropdown-submenu" aria-expanded="false">BOOK ONLINE</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="servicespackages1.php">Photography Packages</a><a class="text-white dropdown-item display-4" href="videopackages.php">Video Packages</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="about.php">ABOUT</a></li>
        </ul>

    </div>
</nav>
</section>





<section class="header7 cid-r9VWt4bHUK" id="header7-1n">
        
    <div class="cid-r9VWt4bHUK234">

            <center><h2 class="text-white text-style">Our Services</h2></center>
            <div class="menu-sub">
                   <a><center class="text-white"><a class="text-danger" href="servicespackages1.php">Premier Content</a> |  <a href="servicespackages2.php" class="text-white" >Creative Content</a> |  <a href="servicespackages3.php" class="text-white" >Standard Content</a></center></a>
                </div>
                <?php
								require_once('config/db.php');
								$result = $conn->prepare("SELECT * FROM cv_packages where package_category = 'Premier Content'");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
				?>
                <form action ="servicespackages1.php" method="POST">
                 <div class="border-content-style">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-1">
                                        <div class="avatar"><img src="<?php echo $row ['package_image']; ?>" alt="Avatar" class="avatar"></div>
                                </div>
                                <div class="col-md-5 text-white items-text-style p-5">
                                        <strong><h5><?php echo $row ['package_name']; ?></h5></strong>
                                        
                                    
                                    </div>
                                    <div class="col-md-3 text-white items-text-style p-5">
                                            <strong><h6 class="curuier-new-style"><?php echo $row ['prices']; ?></h6></strong>
                                            
                                        
                                        </div>
                                    <div class="col-md-3 p-5">
                                        <a name="crystal" id="crystal" class="bookit-button" type="submit" href='bookonline.php<?php echo '?id='.$id; ?>'>Book It</a>

                                    </div>
                                    <div class="media-container">
                                            <div class="col-md-12 text-white content">
                                                
                                                <a>
                                                <ul> 
                                                 <?php echo $row ['item_1']; ?><br>
                                                 <?php echo $row ['item_2']; ?><br>
                                                 <?php echo $row ['item_3']; ?><br>
                                                 <?php echo $row ['item_4']; ?><br>
                                                 <?php echo $row ['item_5']; ?><br>
                                                 <?php echo $row ['item_6']; ?><br>
                                                 <?php echo $row ['item_8']; ?><br>
                                                 <?php echo $row ['item_9']; ?><br>
                                                 <br><a href="getintouch.php"  class="text-warning text-white mbr-fonts-style">|Read More |</a>


                                                </ul>
                                                
                                                
                                                
                                                
                                                
                                               
                                                </a>
                                                
                                            </div>
                                            </div>
                               
                            </div>
                        </div>
            
                    </div>
                </form>
            <?php } ?>

</section>
<?php include 'footer.php'; ?>
<script src="assets/disablekey/disable.js"></script>
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
  <script src="assets/disablekey/disable.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>