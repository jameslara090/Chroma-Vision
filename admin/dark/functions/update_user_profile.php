<?php
include 'connection.php';
$get_id=$_REQUEST['id'];

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$region= $_POST['region'];
$province= $_POST['province'];
$municipality= $_POST['city'];
$barangay= $_POST['barangay']; 
$username = $_POST['username'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$username = $_POST['username'];

if ($_POST["password"] === $_POST["confirm_password"]) {
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET username ='$username', first_name='$fname', last_name='$lname', middle_name='$mname', phone_number='$phone', email='$email', password='$password', 
    region='$region', province='$province', municipality='$municipality', barangay='$barangay' WHERE id='$get_id'";
    $connect->exec($sql);
    echo "<script>alert('Successfully Added Data!'); window.location='../view_user_profile.php'</script>";
   }
 else {
    echo "<script>alert('Error Data!'); window.location='../view_user_profile.php'</script>";

 }




?>