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
                        <li  class="active"><a href="user_management.php"><i class="icon-users"></i><span>User Management</span></a></li>
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
                          <li class="breadcrumb-item active" aria-current="page">User Management</li>
                          <li class="breadcrumb-item active" aria-current="page">New User</li>
                        </ol>
                    </nav>
                </div>            
                
            </div>
           
            <div class="container-fluid">
                <div class="row clearfix">
                <div class="col-md-12">
                    
                </div>
                    <div class="col-xl-12 col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                               
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                                </ul>
                            </div>
                            <form action="functions/new_user.php" method="post">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" >First Name: </small>
                                            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" >Last Name: </small>
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" >Middle Name: </small>
                                            <input type="text" name="mname" class="form-control" placeholder="Middle Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted">Region: </small>
                                            <select class="form-control"  value="region" name="region"  id="region" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                       <small class="text-muted">Province: </small>
                                            <select  class="form-control"  value="province" name="province" id="province" required>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                       <small class="text-muted">Municipality: </small>
                                            <select  class="form-control" value="city" name="city" id="city" required>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        
                                        <div class="form-group">
                                        <small class="text-muted">Barangay: </small>
                                            <select  class="form-control"  value="barangay" name="barangay" id="barangay" required>
                                            </select>
                                        </div>
                                       
                                    </div>

                                    <div class="col-lg-3 col-md-12">
                                        
                                        <div class="form-group">
                                        <small class="text-muted">Username: </small>
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-12">
                                        
                                    <div class="form-group">
                                        <small class="text-muted">User Role: </small>
                                            <select  class="form-control" name="user_role">
                                                       <option value="" >-----Select-----</option>
                                                       <option value="admin">Admin</option>
                                                       <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" >Email: </small>
                                            <input type="email" class="form-control" name="email"  placeholder="Email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted">Contact: </small>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <h6>Password</h6>
                                        
                                        <div class="form-group">
                                            <input type="password"  name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-round btn-primary">Submit</button> &nbsp;&nbsp;
                                <a href="user_management.php"><button type="button" class="btn btn-round btn-default">Cancel</button></a>
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
       <?php include 'javascript.php'; ?>
       <?php include 'location.php'; ?>  
    </body>

    </html>