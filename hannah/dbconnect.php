<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "cellphone";

$conn = mysqli_connect($host, $user, $password, $db);


if(!$conn){

	die("Error in connection");
}
	
?>