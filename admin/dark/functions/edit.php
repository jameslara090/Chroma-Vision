<?php
include 'connection.php';
$get_id=$_REQUEST['id'];

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone_number= $_POST['phone_number'];
$region = $_POST['region'];
$province = $_POST['province'];
$city = $_POST['city'];
$barangay = $_POST['barangay'];
$packages = $_POST['package_name'];
$status= $_POST['status'];
$sched= $_POST['sched'];

$sql = "UPDATE client_data SET fname ='$fname', mname ='$mname', lname ='$lname', cus_email = '$email', cus_ContactNumber = '$phone_number',
cus_region = '$region', cus_province = '$province', cus_city = '$city', cus_barangay='$barangay', packages='$packages', cus_sched='$sched', 
status='$status' WHERE  client_id = '$get_id' ";

$connect->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='../clientmanagement.php'</script>";


?>