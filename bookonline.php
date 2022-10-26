
<?php
    $ID=$_GET['id'];
     include 'admin/dark/functions/connection.php';
     $result = $connect->prepare("SELECT * FROM cv_packages where id='$ID'");
     $result->execute();
     for($i=0; $row = $result->fetch(); $i++){
     $id=$row['id'];
     $package=$row['package_name'];
     $price=$row['prices'];

  
    if(isset($_POST['saveBook'])){
        $fname= $_POST['f_name'];
        $mname=$_POST['m_name'];
        $lname=$_POST['l_name'];
        $cus_email=$_POST['cus_email'];
        $cus_ContactNumber=$_POST['cus_ContactNumber'];
        $cus_region=$_POST['cus_region'];
        $cus_province=$_POST['cus_province'];
        $cus_city=$_POST['cus_city'];
        $cus_barangay=$_POST['cus_barangay'];
        $cus_packages=$package;
        $cus_sched=$_POST['cus_sched'];
        if(empty($fname)){
            echo "<script>alert('Please Fill Out the First Name!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($mame)){
            echo "<script>alert('Please Fill Out the Middle Name!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($lname)){
            echo "<script>alert('Please Fill Out the Last Name!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_email)){
            echo "<script>alert('Please Fill Out the Email!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_ContactNumber)){
            echo "<script>alert('Please Fill Out the Contact Number!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_region)){
            echo "<script>alert('Please Fill Out the Region!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_province)){
            echo "<script>alert('Please Fill Out the Province!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_city)){
            echo "<script>alert('Please Fill Out the City!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_barangay)){
            echo "<script>alert('Please Fill Out the Barangay!'); window.location='bookonline.php?id=$id'</script>";
        }elseif(empty($cus_sched)){
            echo "<script>alert('Please Fill Out the Schedule!'); window.location='bookonline.php?id=$id'</script>";
        }else{
          $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "INSERT INTO client_data (fname, mname, lname, cus_email, cus_ContactNumber, cus_region, cus_province, cus_city, cus_barangay, packages, cus_sched)
           VALUES ('$fname', '$mname', '$lname', '$cus_email', '$cus_ContactNumber', '$cus_region', '$cus_province', '$cus_city', '$cus_barangay', '$cus_packages', '$cus_sched')";
          $connect->exec($sql);
         echo "<script>alert('Account successfully added!'); window.location='.../index.php'</script>";
        }

    }
        
    ?>
    <?php } ?>

   
<!doctype html>
<html lang="en">
<head>
<title>Chroma Vision Photography|BOOK ONLINE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="images/cvlogo.jpg" type="image/x-icon">
<meta name="description" content="">
<title>Book Online | Chroma Vision Photography</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="admin/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="admin/assets/vendor/animate-css/vivify.min.css">
<link rel="stylesheet" href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- MAIN CSS -->
<link rel="stylesheet" href="admin/dark/assets/css/site.min.css">


</head>

<body class="theme-orange">
    <div class="pattern">
        <span class="red"></span>
        <span class="indigo"></span>
        <span class="blue"></span>
        <span class="green"></span>
        <span class="orange"></span>
    </div>
    
    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn col-md-8">
            <div class="card">
                <div class="body">
                    <div class="auth_brand">
                <a class="navbar-brand" href="javascript:void(0);"><img src="admin/dark/assets/img/cblogo-273x68.png" width="200" height="50" class="d-inline-block align-top mr-2" alt=""></a>                                                
               </div>        
            <form class="form-auth-small m-t-20" action="bookonline.php<php echo $ID ?>" method="POST">          
                    <div class="body">
                            <div class="row clearfix">
                            <?php
                                    
                                    //include('admin/dark/function/connection.php');
                                    include('config/db.php');
                                    $result = $conn->prepare("SELECT * FROM cv_packages where id='$ID'");
                                    $result->execute();
                                    for($i=0; $row = $result->fetch(); $i++){
                                    $id=$row['id'];
                                    $package=$row['package_name'];
                                    $price=$row['prices'];
                                 ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <small>First Name:</small>
                                        <input type="text"  class="form-control" id="f_name" name="f_name" placeholder="First Name" required> 
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <small>Middle Name:</small>
                                        <input type="text"  class="form-control" name="m_name" placeholder="Middle Name" required> 
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <small>Last Name:</small>
                                        <input type="text"  class="form-control" name="l_name" placeholder="Last Name" required> 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <small>Email</small>   
                                        <input type="email" name="cus_email" placeholder="Email" class="form-control" required>
                                    </div>        
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <Small>Contact Number</Small>
                                        <input type="text" name="cus_ContactNumber" placeholder= "ContactNumber" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-12">
                                        <div class="form-group">
                                        <small>Region: </small>
                                            <select class="form-control"  value="region" name="cus_region"  id="region" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                       <small>Province: </small>
                                            <select  class="form-control"  value="province" name="cus_province" id="province" required>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                    <div class="form-group">
                                       <small>Municipality: </small>
                                            <select  class="form-control" value="city" name="cus_city" id="city" required>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        
                                        <div class="form-group">
                                        <small>Barangay: </small>
                                            <select  class="form-control"  value="barangay" name="cus_barangay" id="barangay" required>
                                            </select>
                                        </div>
                                       
                                    </div>
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <small>Packages</small>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Packages</label>
                                </div>
                                
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option value="$package" selected><?php echo $package ?></option>
                                    
                                </select>
                                <?php } ?>
                            </div>
                                </div>
                                
                                
                                <div class="col-lg-6 col-md-4 col-sm-12">
                                      <small>Date Schedule</small>   
                                        <div class="input-group mb-3">                               
                                            <input data-provide="datepicker" id="datepicker" name="cus_sched" data-date-autoclose="true" placeholder="Schedule" class="form-control" data-date-format="mm/dd/yyyy">
                                        </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="separator-linethrough"><span></span></div>
                               <div class="">
                                            <a href="servicespackages1.php" type="button" class="btn btn-round btn-default">Close</a>
                                            <button type="submit" id="submit" name="saveBook" class="btn btn-round btn-success">Submit</button>
                                </div>
            
                    </form>   
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
<script src="admin/dark/assets/bundles/libscripts.bundle.js"></script>    
<script src="admin/dark/assets/bundles/vendorscripts.bundle.js"></script>
<script src="admin/dark/assets/bundles/mainscripts.bundle.js"></script>
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/query.ph-locations-v1.0.0.js"></script>
<script src="admin/assets/vendor/toastr/toastr.js"></script>
<?php include('admin/dark/location.php');?>
<script type="text/javascript">
    $('#datepicker').datepicker({ 
        startDate: new Date()
        
    });
    $(function () {
            $('#datepicker').datepicker({
                inline: true,
                sideBySide: true,
                daysOfWeekDisabled: [0, 6]
            });
        });
        
        $(document).ready(function(){  
        $('#submit').click(function(){  
            var f_name = $('#f_name').val();  
            //var message = $('#message').val();  
            if(f_name == ''){  
                M.toastr({
                    html: 'Please Fill up the fields'
                });
               
            }else{  
                
            }  
        });  
    });  
   
</script>
</body>
</html>