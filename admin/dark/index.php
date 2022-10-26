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

                        
                        <li class="active"><a href="index.php"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li ><a href="user_management.php"><i class="icon-users"></i><span>User Management</span></a></li>
                        <li ><a href="clientmanagement.php"><i class="icon-users"></i><span>Client Management</span></a></li>
                        <li ><a href="file_management.php"><i class="icon-users"></i><span>File Management</span></a></li>


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
                          <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>            
                
            </div>
        </div>

        <div class="container-fluid">

       

            <div class="row clearfix">
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body p-4">
                            <div class="row clearfix">
                                <div class="col-auto">
                                    <div class="stamp stamp-md bg-warning">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small text-muted">Capacity</div>
                                    <div class="h4 m-0">105GB</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-7">
                                    <h5 class="mb-0">Server</h5>
                                    <small class="info">of 1Tb</small>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="m-b-0">62%</h2>
                                </div>
                                <div class="col-12">                                    
                                    <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                                        <div class="progress-bar" data-transitiongoal="87"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                                <div class="ml-4">
                                    <span>Daily Visits</span>
                                    <h4 class="mb-0 font-weight-medium">5,805</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Users</h2>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-6 border-right pb-4 pt-4">
                                    <label class="mb-0">New Users</label>
                                    <h4 class="font-30 font-weight-bold text-col-blue">2,025</h4>
                                </div>
                                <div class="col-6 pb-4 pt-4">
                                    <label class="mb-0">Return Visitors</label>
                                    <h4 class="font-30 font-weight-bold text-col-blue">1,254</h4>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <label class="d-block">New Users <span class="float-right">77%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="d-block">Engagement <span class="float-right">23%</span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card user_statistics">
                        <div class="header">
                            <h2>Earning Report</h2>
                        </div>
                        <div class="body">                            
                            <div id="chart-bar" style="height: 302px"></div>
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