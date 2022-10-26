<?php

$connect = mysqli_connect("localhost", "root", "", "chromavisiondata");
if ($_POST["action"] == "fetch")
{
    $query  = "SELECT * FROM slider_photo ORDER BY id DESC";
    $result = mysqli_query($connect, $query);
    $output = '
<table class="table table-bordered table-striped">  
<tr>
<th width="10%"><center>ID<center></th>
<th width="30%">Image</th>
<th width="30%">Date</th>
<th width="10%">Action</th>
</tr>
';
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '<tr>';
       $output .='<td><center>' . $row["id"] . '</center></td>'; 
       $output .='<td><img  width="50px" height="30px;" src="slider/'. $row["filename"] .'"></td>';
       $output .='<td>' . $row["uploaddate"] . '</td>';
       $output .= '
       <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="' . $row["id"] . '"><i class="fa fa-edit"></i></button>
       <button type="button" name="delete" class="btn btn-danger bt-xs delete" id="' . $row["id"] . '"><i class="fa fa-trash"></i></button></td>
       ';
       $output .='</tr>';
    }
    $output .= '</table>';
    echo $output;
}

if ($_POST["action"] == "insert")
{
    if (isset($_FILES))
    {

        $fileName     = $_FILES["image"]["name"];
        $fileTmpLoc   = addslashes($_FILES["image"]["tmp_name"]);
        $fileType     = $_FILES["image"]["type"];
        $fileSize     = $_FILES["image"]["size"];
        $fileErrorMsg = $_FILES["image"]["error"];
        $kaboom       = explode(".", $fileName);
        $fileExt      = end($kaboom);
        $db_file_name = date("DMjGisY") . "" . rand(1000, 9999) . "." . $fileExt; // WedFeb272120452013RAND.jpg
        list($width, $height) = getimagesize($fileTmpLoc);

        if ($width < 10 || $height < 10)
        {
            echo 'That Image has no Dimensions';

        }
        if ($fileSize > 1048576)
        {
            echo 'Your image file was larger than 1mb';

        }
        else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName))
        {
            echo 'Your image file was not jpg, gif or png type';

        }
        else if ($fileErrorMsg == 1)
        {
            echo 'An unknown error occurred';

        }
        $t =("slider/ $db_file_name");
        $moveResult = move_uploaded_file($fileTmpLoc, "$t");
        if ($moveResult != true)
        {
            $sql   = "INSERT INTO slider_photo(filename, uploaddate) VALUES ('$db_file_name',now())";
            $query = mysqli_query($connect, $sql);
            mysqli_close($connect);

            echo 'Successfully Added!';

        }

    }


}
if ($_POST["action"] == "update")
{   
    $file  = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE photo_slider SET name = '$file' WHERE id = '" . $_POST["id"] . "'";
    if (mysqli_query($connect, $query))
    {
        echo 'Image Updated into Database';
    }
}
if ($_POST["action"] == "delete")
{

    $select = "SELECT id,filename, from gallary_photo";
    $result = mysqli_query($connect, $query);
    // $id = row['id'];

     $sql = "DELETE FROM slider_photo WHERE id='$id'";
   
    if (mysqli_query($connect, $query))
    {
        echo 'Image Deleted from Database';
    }
}

?>