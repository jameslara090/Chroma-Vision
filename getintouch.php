<?php
if(isset($_POST['sendemail'])){
    require  'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host ='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='booking@chromavisionsstudios.com';
    $mail->Password='Ilovefer@ri2019';

    $mail->setFrom($_POST['email']);
    $mail->addAddress('booking@chromavisionsstudios.com');
    $mail->addReplyTo('booking@chromavisionsstudios.com');

    $mail->isHTML(true);
    $mail->Subject='Chroma Vision Photography';
    $mail->Body = $_POST['message'];

    if(!$mail->send()){
        header('location:getintouch.php?emailNotSent');
        exit();
    }else{
        header('location:getintouch.php?emailsent');
        exit();

    }
}




?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/cvlogo.jpg" type="image/x-icon">
  <meta name="description" content="Web Creator Description">
  <title>Get In Touch | Chroma Vision Photography </title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/custom/custom.css">
  <script src="assets/disablekey/disable.js"></script>
  
  
  
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
            <li class="nav-item"><a class="nav-link link menu-active display-4" href="getintouch.php" >GET IN TOUCH</a></li>
            <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="portfolio.php" data-toggle="dropdown-submenu" aria-expanded="false">PORTFOLIO</a>
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


    <section class="cid-r9VY97jjxU" id="header15-1s"></section>
    <div class="cid-r9VWt4bHUK">

           
        <div class="row">
            <div class="container">
               <div class="contact">
                  <div class="col-md-12">
                     <div class="map"> 
                        <iframe src="https://maps.google.com/maps?q=chroma%20vision%20sorsogon&t=&z=17&ie=UTF8&iwloc=&output=embed" width="600" height="150"  frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
                  
                  <div class="row pb-5 ">
                        <div class="col-md-6 text-white ">
                                <div class="contact-info">
                                   <div class="kode-section-title">
                                      <h3 class="p-3">Contact Info</h3>
                                   </div>
                                   <div class="kode-forminfo">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip..</p>
                                      <ul class="kode-form-list">
                                         <li>
                                            <i class="icon mbri-map-pin"></i> 
                                            <p><strong>Address:</strong> 3618 Magsasay St. Sorsogon City</p>
                                         </li>
                                         <li>
                                            <i class="fa fa-phone"></i> 
                                            <p><strong>Phone:</strong> +639474021139</p>
                                         </li>
                                         <li>
                                            <i class="icon mbri-message"></i> 
                                            <p><strong>Email:</strong> chromavisionsorsogon@gmail.com</p>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-6 pt-3">
                                <div class="contact-us">
                                   <form method="post"  action="getintouch.php"class="comments-form" id="contactform">
                                      <ul class=hode-form-list">
                                         <li><input type="text" id="name" name="name" class="required" placeholder="Name *"></li>
                                         <li><input type="text" id="email" name="email" class="required email" placeholder="Email *"></li>
                                        
                                         <li><textarea name="message" id="message" placeholder="Add your message"></textarea></li>
                                         <li><input class="thbg-color" name="sendemail" type="submit" value="send"></li>
                                      </ul>
                                      <div class="hidden-me" id="contact_form_responce">
                                         <p></p>
                                      </div>
                                   </form>
                                </div>
                             </div>
                          </div>
                       </div>
                  </div>
                  
         </div>
         </div>
    
    </section>
    <?php include 'footer.php'; ?>    
  <script>
    $(window).load(function() {
	$(".loader").delay(2000).fadeOut("slow");
  $("#overlayer").delay(2000).fadeOut("slow");
   })
  </script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>