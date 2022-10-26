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
                <h2><small>List of Files</small></h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                </ul>
            </div>
            <div class="form-group">
                <div class="row clearfix">
                <?php
                             include 'functions/connection.php';
                             $result = $connect->prepare("SELECT * FROM client_data ORDER BY client_id ASC");
                             $result->execute();
                             for($i=0; $row = $result->fetch(); $i++){
                             $id=$row['client_id'];

                ?>
                <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="card">
                            <div class="body">
                                <center>
                                <img src="assets/img/Circle-icons-folder.svg.png" alt="" srcset="" hieght="150px" width="150px" >
                                <hr>
                                <small class="text-muted">Name: </small>
                                <p class="m-b-0" name="userbirth"><?php echo $row["fname"]?> <?php echo $row["lname"]?></p>
                                <hr>
                                <a href="Filelist.php<?php echo '?id='.$id; ?>"><button class="btn btn-danger">View Files</button></a>
                                </center>
                               

                            </div>
                        </div>
                    </div>
                <?php } ?>
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
       <?php include 'javascript.php'; ?>
    </body>

    </html>