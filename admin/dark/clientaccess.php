<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:clientlogin.php");
}
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Home | Chroma Vision</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
          <!-- VENDOR CSS -->
          <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">
          <link rel="stylesheet" href="../assets/vendor/light-gallery/css/lightgallery.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <!-- MAIN CSS -->
          <link rel="stylesheet" href="assets/css/site.min.css">
          
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css">
          
    </head>

    <body class="theme-orange">

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <div id="wrapper">

            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">

                    <div class="navbar-left">
                        <div class="navbar-btn">
                            <a href="index.php"><img alt="Oculux Logo" class="img-fluid logo"></a>
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>
                        <ul class="nav navbar-nav">

                        </ul>
                    </div>

                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <form id="navbar-search" class="navbar-form search-form">
                                        <input value="" class="form-control" placeholder="Search here..." type="text">
                                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                                    </form>
                                </li>

                                <li><a href="functions/clientlogout.php" class="icon-menu"><i class="icon-power"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>
            </nav>

            <div id="left-sidebar" class="sidebar">
                <div class="navbar-brand">
                    <a href="index.php"><span> <img src="assets/img/cblogo-273x68.png" alt="Chroma Vision" srcset=""height="35" width="200" > </span></a>
                    <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
                </div>
                <div class="sidebar-scroll">
                    <div class="user-account">
                        <div class="user_div">
                            <img src="assets/img/user-profile.png" class="user-photo" alt="User Profile Picture">
                        </div>
                        <div class="dropdown">
                            <span>Welcome,</span>
                            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong></a>
                            <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                <li><a href="#"><i class="icon-user"></i>My Profile</a></li>

                                <li><a href="functions/clientlogout.php"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>

        <div id="main-content">
            <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    
                </div>            
                
            </div>

            <div class="container-fluid">

<div class="col-lg-12">
    <div class="card">
        <div class="header pt-3">
            <h2><small>List of Photos</small></h2>
            <!--
            <ul class="header-dropdown dropdown">
                <form action="functions/fileupload.php<?php echo '?id='.$ID; ?>" method="post" entype="multipart/form-data">
                <li><input class="btn btn-danger" name="files[]" type="file" value="" multiple></li>
                <li><button class="btn btn-warning" type="submit" name="submit">Upload</button></li>
                </form>

            </ul>
            !-->
        </div>
        <div class="form-group">
            <div class="row clearfix">
            <?php
                       $email = $_SESSION["username"];
                        include 'functions/connection.php';
                        $query = "SELECT * FROM files WHERE username ='$email' ORDER BY id";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        //$id=$row['id'];
            ?>
             <div id="lightgallery" class="row clearfix lightGallery">
                              <?php
                              $email = $_SESSION["username"];
                              include('functions/connection.php');
                              $query = "SELECT * FROM files WHERE username ='$email' ORDER BY id";
                              $statement = $connect->prepare($query);
                              $statement->execute();
                              $result = $statement->fetchAll();
                             
                                foreach($result as $row)
                                {
                                    echo'
                                     <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="files/'.$row["foldername"].'/'.$row["FILE_NAME"].'"><img class="img-fluid rounded" src="files/'.$row["foldername"].'/'.$row["FILE_NAME"].'" alt=""></a></div>
                                    ';


                                }

                              ?>
                        
                </div>
            
            <!--row-->

            </div>

            </div>

    </div>
</div>
</div>


        </div>

        
    </div>
            </div>

            
        </div>
    <script src="assets/bundles/libscripts.bundle.js"></script>    
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/lightgallery.bundle.js"></script><!-- Light Gallery Plugin Js --> 
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/medias/image-gallery.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

    </html>