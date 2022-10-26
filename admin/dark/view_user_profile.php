<?php  
session_start();  
if(!isset($_SESSION["username"]))
{
 header("location:login.php");
}
$ID=$_GET['id'];
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
                          <li class="breadcrumb-item active" aria-current="page">View User Profile</li>
                        </ol>
                    </nav>
                </div>                    
            </div>
            <?php
                        include 'functions/connection.php';
                        $result = $connect->prepare("SELECT * FROM users where id='$ID'");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++){
                        $id=$row['id'];
            ?>
            <div class="container-fluid">
                <div class="row clearfix">
                <div class="col-md-12">
                        <div class="card social">
                            <div class="profile-header d-flex justify-content-between justify-content-center">
                                <div class="d-flex">
                                    <div class="mr-3">
                                        <img src="assets/img/user-profile.png" class="rounded" alt="">
                                    </div>
                                    <div class="details">
                                        <h5 class="mb-0"><a name="fname"><?php echo $row["first_name"]?></a>  <a name="surname"><?php echo $row["last_name"]?></a></h5>
                                        <span class="text-light"><?php echo $row["role"]?></span>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="card">
                            <div class="header">
                                <h2>Info</h2>

                            </div>
                            <div class="body">
                                <small class="text-muted">Address: </small>
                                <p name="location"> <?php echo $row["zipcode"]?> <?php echo $row["barangay"]?>, <?php echo $row["municipality"]?>, <?php echo $row["province"]?>, Region <?php echo $row["region"]?></p>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <hr>
                                <small class="text-muted" name="useremail">Email address: </small>
                                <p><?php echo $row["email"]?></p>
                                <hr>
                                <small class="text-muted" name="usercontact">Mobile: </small>
                                <p>+<?php echo $row["phone_number"]?></p>
                                <hr>
                                

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="card">
                           <form action="function/update_user_profile.php" method="post">
                            <div class="header">
                                <h2>Account Information</h2>
                                <ul class="header-dropdown dropdown">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                                <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" name="useremail">First Name: </small>
                                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $row["first_name"]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" name="useremail">Last Name: </small>
                                            <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $row["last_name"]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" name="useremail">Middle Name: </small>
                                            <input type="text" class="form-control" placeholder="Middle Name"name="mname"  value="<?php echo $row["middle_name"]?>">
                                        </div>
                                    </div>   
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted" name="useremail">Middle Name: </small>
                                            <textarea type="text" class="form-control" placeholder="Middle Name"name="mname"  value=""><?php echo $row["region"]?>,<?php echo $row["province"]?>, <?php echo $row["municipality"]?>, <?php echo $row["barangay"]?></textarea>
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
                                                <option value="<?php echo $row["barangay"]?>"></option>
                                            </select>
                                        </div>
                                       
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                        <small class="text-muted">Email: </small>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $row["email"]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                          <small class="text-muted">Contact Number: </small>
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phone"  value="<?php echo $row["phone_number"]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <h6>Change Password</h6>
                                        <div class="form-group">
                                            <input type="password" class="form-control" value="<?php echo $row["password"]?>" placeholder="Current Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password">
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                                <button type="button" class="btn btn-round btn-default">Cancel</button>
                            </div>
                            </div>
                           
                        </div>
                    </form>
                       
                    </div>
                    
                </div>
            </div>
            <?php } ?>

            


        </div>

        
    </div>
            </div>

            
        </div>
       <?php include 'javascript.php'; ?>
       <?php include 'location.php'; ?>   
    </body>

    </html>