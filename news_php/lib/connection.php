<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "news616";

$connection = new mysqli($host, $user, $pass, $db);

if($connection -> connect_error){
	die($connection -> error);
}else{
	// echo "Database connected succesfully";
}

 ?>