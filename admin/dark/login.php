<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "chromavisiondata";  
 $message = "";  
 try  
 {    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE email = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"],
                          //'role'        =>      $_POST["txt_role"]
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:index.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!doctype html>
<html lang="en">

<head>
<title>Chroma Vision Photography| Sign-in</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/site.min.css">

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
        <div class="auth_div vivify popIn">
            
            <div class="card">
                <div class="body">
                    <div class="auth_brand">
                <a class="navbar-brand" href="javascript:void(0);"><img src="assets/img/cblogo-273x68.png" width="200" height="50" class="d-inline-block align-top mr-2" alt=""></a>                                                
               </div>
            
             <div class="separator-linethrough"><span></span></div>
                     
                    
                    <form class="form-auth-small m-t-20" role="login" method="POST" action="login.php">
                        
                        <div class="form-group">
                            <input type="text"  class="form-control round" name="username" placeholder="Email" value="" required=""> 
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">                            
                            <input type="password" name="password" class="form-control round"
                                 placeholder="Password" required="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">                            
                           <label for="sel1">Select Role</label>
                                <select class="form-control round" name="txt_role" id="sel1">
                                  <option selected="selected">-----Select-----</option>
                                  <option value="client">CLient</option>
                                  <option value="admin">admin</option>
                                </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="separator-linethrough"><span></span></div>
                        
                        <button type="submit" class="btn btn-primary btn-round btn-block" name="login">Login</button>                                
                    </form>
                    
                </div>

             
            
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>


</html>