<?php



sleep(5);

if(isset($_POST['first_name']))
{
 $connect = new PDO("mysql:host=localhost;dbname=vision_db", "root", "");
 
 $data = array(
  ':first_name'  => $_POST['first_name'],
  ':last_name'  => $_POST['last_name'],
  ':email'   => $_POST['email'],
  ':phone'   => $_POST['phone'],
  ':date'   => $_POST['date'],
  ':packages'   => $_POST['packages'],
  ':seslocation'   => $_POST['seslocation'],
  ':address'   => $_POST['address'],
  ':about'   => $_POST['about']
 );
 
 $query = "
 INSERT INTO client
 (first_name, last_name, email, phone, set_date,packages,seslocation,address,about) 
 VALUES (:first_name, :last_name, :email, :phone, :date,:packages,:seslocation,:address,:about)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  echo 'Your Book Request is Successfully Added Wait for Email confirmation message';
 
 }
}

?>