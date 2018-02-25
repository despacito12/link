<?php

include('dbconnect.php');

$brand = $_POST['brand'];
$model = $_POST['model'];

$query = "INSERT INTO info(brand,model) VALUES('$brand','$model')";

if(mysqli_query($conn,$query)){

	header("Location:recordok.html");
}
else{

	echo"Error";
}

mysqli_close($conn);

?>