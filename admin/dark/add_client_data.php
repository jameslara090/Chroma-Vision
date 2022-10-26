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
                        <li class="active" ><a href="clientmanagement.php"><i class="icon-users"></i><span>Client Management</span></a></li>
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
                          <li class="breadcrumb-item active" aria-current="page">Client Management</li>
                        </ol>
                    </nav>
                </div>            
                
            </div>

            <div class="container-fluid">
           
           <div class="row clearfix">
               <div class="col-md-12">
                   <div class="card">
                       
                       <div class="body">
                        
                           <form method="POST" action="functions/add_client_data.php" enctype="multipart/form-data" >
                             
                               <input type="hidden" name="id" value="">
                               <div class="form-group">
                                   <div class="row clearfix">
                                       <div class="col-lg-2 col-md-12">
                                                   <label><strong>First Name</strong></label>
                                                   <input type="text" class="form-control"
                                                       placeholder="First Name" id="first-name-icon" name="fname" value="">
                                                
                                       </div>
                                       <div class="col-lg-2 col-md-12">
                                                   <label><strong>Middle Name</strong></label>
                                                   <input type="text" class="form-control"
                                                       placeholder="Middle Name" id="first-name-icon" name="mname" value="">
                                                
                                       </div>
                                       <div class="col-lg-2 col-md-12">
                                                   <label><strong>Last Name</strong></label>
                                                   <input type="text" class="form-control"
                                                       placeholder="last Name" id="first-name-icon" name="lname" value="">
                                                
                                       </div>
                                       
                                       <div class="col-lg-6 col-md-12">
                                       <label><strong>Packages</strong></label>
                                                   <select class="form-control" name="package_name" id="package_name">
                                                       <option value="" >-----Select-----</option>
                                                       <option value="Crystal Packages" >Crystal Packages</option>
                                                       <option value="Silver Packages" >Silver Packages</option>
                                                       <option value="Gold Packages" >Gold Packages</option>
                                                       <option value="Production Set" >Production Set</option>
                                                       <option value="Create Art Photography" >Create Art Photography</option>
                                                       <option value="Wedding Cinema" >Wedding Cinema</option>
                                                       <option value="Chroma Vision Standard" >Chroma Vision Standard</option>
                                                       <option value="Mobile Studio" >Mobile Studio</option>
                                                       <option value="Photobooth" >Photobooth</option>
                                                       <option value="Aerial Packages" >Aerial Packages</option>
                                                       <option value="Video Services" >Video Services</option>
                                                       <option value="Wedding Cinema" >Wedding Cinema</option>

                                                   
                                                   </select>
                                       </div>

                                       
                                      
                                   </div>                                    
                               </div>

                               <div class="form-group">
                                   <div class="row clearfix">
                                       <div class="col-lg-6 col-md-12">
                                                  <label><strong>Email</strong></label>
                                                  <input type="email" class="form-control" placeholder="Email" id="first-name-icon" name="email" value="">
                                       </div>
                                       <div class="col-lg-6 col-md-12">
                                              <label><strong>Contact</strong></label>
                                              <input type="number" class="form-control" placeholder="Mobile" name="phone_number" value="">   

                                       </div>

                                       
                                   </div>                                    
                               </div>

                               <div class="form-group">
                                   <div class="row clearfix">
                                   <div class="col-lg-6 col-md-12">
                                                   <label><strong>Status</strong></label>
                                                   <select class="form-control" name="status" id="status">
                                                       <option value=""> 
                                                        -----SELECT-----
                                                       </option>
                                                       <option value="New">New</option>
                                                       <option value="Approved">Approved</option>
                                                       <option value="Pending">Pending</option>
                                                       <option value="Cancelled">Cancelled</option>
                                                       
                                                   </select>
                                           
                                       </div>
                                       <div class="col-lg-6 col-md-12">
                                                  <label><strong>Prefer Schedule</strong></label>
                                                  <input type="date" class="form-control"  name="sched" value="">
                                       </div>
                                       
                                       
                                   </div>                                    
                               </div>

                               <div class="form-group">
                                   <div class="row clearfix">
                                  
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
                                       
                                       
                                   </div>                                    
                               </div>
                           
                               
                             
                                               <div class="mt-4">
                                               <button type="submit" name="update"
                                               class="btn btn-primary me-1 mb-1">Submit</button>
                                               <a  href="clientmanagement.php"
                                               class="btn btn-light me-1 mb-1">Back</a>
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
       <?php include 'javascript.php'; ?>
    </body>

    </html>