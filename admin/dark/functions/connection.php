<?php 
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "chromavisiondata";  
$connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
?>