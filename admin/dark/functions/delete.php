<?php
include 'connection.php';

$get_id=$_GET['id'];

// sql to delete a record
$sql = "Delete from client_data where client_id = '$get_id'";

// use exec() because no results are returned
$connect->exec($sql);
header('location:../clientmanagement.php');
?>