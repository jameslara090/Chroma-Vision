<?php
include 'connection.php';


$fname= $_POST['fname'];
$mname= $_POST['mname'];
$lname= $_POST['lname'];
$package_name= $_POST['package_name'];
$email= $_POST['email'];
$phone_number= $_POST['phone_number'];
$status= $_POST['status'];
$sched= $_POST['sched'];
$address= $_POST['address'];

$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tbl_clientmanagement (first_name, middle_name, last_name, services, email, phone, status, date_sched, address)
VALUES ('$fname', '$mname', '$lname', '$package_name', '$email', '$phone_number', '$status', '$sched', '$address')";

$connect->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='../clientmanagement.php'</script>";


?>