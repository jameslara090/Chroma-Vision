<?php 
if (isset($_FILES["photo"]["name"]) && isset($_POST["gallery"])){
	$sql = "SELECT COUNT(id) FROM photos WHERE user='$log_username'";
	$query = mysqli_query($db_conx, $sql);
	$row = mysqli_fetch_row($query);
	if($row[0] > 14){
		header("location: ../message.php?msg=The demo system allows only 15 pictures total");
        exit();	
	}
	$gallery = preg_replace('#[^a-z 0-9,]#i', '', $_POST["gallery"]);
	$fileName = $_FILES["photo"]["name"];
    $fileTmpLoc = $_FILES["photo"]["tmp_name"];
	$fileType = $_FILES["photo"]["type"];
	$fileSize = $_FILES["photo"]["size"];
	$fileErrorMsg = $_FILES["photo"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	$db_file_name = date("DMjGisY")."".rand(1000,9999).".".$fileExt; // WedFeb272120452013RAND.jpg
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	if($fileSize > 1048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize.php");
	$wmax = 800;
	$hmax = 600;
	if($width > $wmax || $height > $hmax){
		$target_file = "../user/$log_username/$db_file_name";
	    $resized_file = "../user/$log_username/$db_file_name";
		img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	}
	$sql = "INSERT INTO photos(user, gallery, filename, uploaddate) VALUES ('$log_username','$gallery','$db_file_name',now())";
	$query = mysqli_query($db_conx, $sql);
	mysqli_close($db_conx);
	header("location: ../photos.php?u=$log_username");
	exit();
}
?><?php 