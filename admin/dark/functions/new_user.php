<?php
include 'connection.php';

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
$user_role = $_POST['user_role'];

if ($_POST["password"] === $_POST["confirm_password"]) {
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (first_name, middle_name, last_name, phone_number, email, password, role, region, province, municipality, barangay)
    VALUES ('$fname', '$mname', '$lname', '$phone', '$email', '$password', '$user_role', '$region', '$province', '$municipality', '$barangay')";

    $connect->exec($sql);
    echo "<script>alert('Successfully Added Data!'); window.location='../user_management.php'</script>";
     }
 else {
    echo "<script>alert('Error Data!'); window.location='../user_management.php'</script>";

 }




?>