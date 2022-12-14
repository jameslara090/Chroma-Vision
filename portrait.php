<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/cblogo-273x68.png" type="image/x-icon">
    <meta name="description" content="Site Builder Description">
    <title>Portfolio</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
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
            <li class="nav-item dropdown"><a class="nav-link link menu-active dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">PORTFOLIO</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="photography.php">Photography</a><a class="text-white dropdown-item display-4" href="videography.php">Videography</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="admin/dark/clientlogin.php" target="">CLIENT ACCESS</a></li>
            <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="services.php" data-toggle="dropdown-submenu" aria-expanded="false">BOOK ONLINE</a>
                <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="servicespackages1.php">Photography Packages</a><a class="text-white dropdown-item display-4" href="videopackages.php">Video Packages</a></div>
            </li>
            <li class="nav-item"><a class="nav-link link text-white display-4" href="#">ABOUT</a></li>
        </ul>

    </div>
</nav>
</section>


    <section class="mbr-section content5 cid-r9VX98BY7d mbr-parallax-background" id="content5-1p">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
        </div>

      <div class="container">
                <div class="media-container-row">
                    <div class="title col-12 col-md-8">
                        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Photography</h2>
                        <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-7">by Ernie Martin Atienza</h3>
                        
                        
                    </div>
                </div>
            </div>
        </section>
 <!---
    <section class="mbr-section content5 cid-r9VENj27aU" id="content5-19">

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">Photography</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-7">by Ernie Martin Atienza</h3>

                </div>
            </div>
        </div>
    </section>
    --->

    <section class="mbr-gallery mbr-slider-carousel cid-r9VE1S9sj4" id="gallery2-18">

        <div class="container">
            <div>
                <!-- Filter -->
                <div class="mbr-gallery-filter container ">
                    <ul>
                        <li class="mbr-gallery-filter-all active"><a href="index.php"><button class="btn btn-md btn-white-outline active display-7">Wedding</button></a></li>
                        <li class="mbr-gallery-filter-all"><a href="photography.php"><button class="btn btn-md btn-white-outline active display-7" href="index.php">Fashion</button></a></li>
                        <li class="mbr-gallery-filter-all"><a href="index.php"><button class="btn btn-md btn-white-outline active display-7" href="index.php">Portrait</button></a></li>
                      
                    </ul>
                </div>
                <!-- Gallery -->
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>
                            <?php
 include('db.php');
$query = "SELECT * FROM wedding ORDER BY image_id DESC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$number_of_rows = $statement->rowCount();
$output = '';

if($number_of_rows > 0)
{
 
 foreach($result as $row)
 {

    $output .= '
  <tr>
  <div>
  <div class="mbr-gallery-item mbr-gallery-item--p0" data-video-url="false">
  <div href="#lb-gallery2-18" data-slide-to="0" data-toggle="modal"><img src="admin/dark/wedding/'.$row["image_name"].'" title=""><span class="icon-focus"></span></div>
</div>


</div>
 
   
  </tr>
  ';

  
 }
}
else
{
 $output .= '
    <p>Data Not Found!</p>
 ';
}

echo $output;
?>
                               
                               
                               
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Lightbox -->
                
            </div>
        </div>

    </section>

    <section class="cid-r9VT8rgUIZ" id="footer2-1g">
            <!--================Address Area =================-->
     
          <div class="container">
              <div class="row address_inner">
                  <div class="col-md-5">
                      <div class="media">
                          <div class="media-left p-l p-r">
                              <img src="assets/images/place-icon.png" alt="">
                          </div>
                          <div class="media-body">
                              <a class="text-white">Office Address :</a><br>
                              <a class="text-warning">3618 Magsasay St. Sorsogon City</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="media">
                          <div class="media-left p-r">
                              <img src="assets/images/phone-icon.png" alt="">
                          </div>
                          <div class="media-body">
                              <a class="text-white">Call Us Now:</a><br>
                              <a class="text-warning">09474021139</a>
                              
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="media">
                          <div class="media-left p-r">
                              <img src="assets/images/inbox-icon.png" alt="">
                          </div>
                          <div class="media-body">
                              <a class="text-white">Email Us:</a><br>
                              <a class="text-warning mbr-fonts-style">chromavisionsorsogon@gmail.com</a>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
      
      <!--================End Address Area =================-->
          <div class="footer-lower">
              <div class="media-container-row">
                  <div class="col-sm-12">
                      <hr>
                  </div>
              </div>
              <div class="media-container-row mbr-white">
                  <div class="col-sm-5 copyright p-89">
                      <p class="mbr-text mbr-fonts-style display-7">
                          ?? Copyright 2018 Chroma Vision - All Rights Reserved
                      </p>
                  </div>
                  
              </div>
          </div>
      
  </section>

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>
    <script src="assets/disablekey/disable.js"></script>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>