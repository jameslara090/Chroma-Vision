<?php
include 'connection.php';


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


$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO client_data (fname, mname, lname, cus_email, cus_ContactNumber, cus_region, cus_province, cus_city, cus_barangay, packages, cus_sched)
VALUES ('$fname', '$mname', '$lname', '$email', '$phone_number', '$region', '$province', '$city', '$barangay', '$packages', '$status', '$sched')";

$connect->exec($sql);
echo "<script>alert('Successfully Added Record!'); window.location='../clientmanagement.php'</script>";


?>