<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:login.php");
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
        <link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">
        <link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
        <?php include 'css.php';?>
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

                                <li><a href="functions/logout.php" class="icon-menu"><i class="icon-power"></i></a></li>
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
                                <li><a href="page-profile.php"><i class="icon-user"></i>My Profile</a></li>

                                <li><a href="functions/logout.php"><i class="icon-power"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">

                        
                        <li ><a href="index.php"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li ><a href="user_management.php"><i class="icon-users"></i><span>User Management</span></a></li>
                        <li ><a href="clientmanagement.php"><i class="icon-users"></i><span>Client Management</span></a></li>
                        <li class="active"><a href="file_management.php"><i class="icon-users"></i><span>File Management</span></a></li>

                        </ul>
                    </nav>
                </div>
            </div>

        <div id="main-content">
            <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page">File Management</li>
                        </ol>
                    </nav>
                </div>            
                
            </div>
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card">
            <div class="header pt-3">
                <h2><small>Upload Files to</small></h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                </ul>
            </div>
            <!--CONTENT HERE-->
            <div class="row clearfix">
                
                <div class="col-md-12">
                   <form action="functions/fileupload.php" method="post" entype="multipart/form-data">
                 
                     <div class="card">
                        <div class="body">
                         <input type="file" name="files[]" multiple >
                        </div>
                        <hr>
                        <center>
                         <button class="btn btn-warning" type="submit"
		                 name="submit">
		                     Upload</button>
                        </center>
                      </div>
                   </form>
                </div>

               

            </div>

                
        </div>

        </div>
    </div>
</div>

        </div>

        
    </div>
            </div>

            
        </div>
       <?php include 'javascript.php'; ?>
       <script src="../assets/vendor/dropify/js/dropify.js"></script>
       <script src="assets/bundles/mainscripts.bundle.js"></script>
       <script src="assets/js/pages/forms/dropify.js"></script>
    </body>

    </html>