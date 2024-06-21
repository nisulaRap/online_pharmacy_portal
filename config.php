<?php 
    
    $servername = "localhost:3306";
	$username = "root";
	$password = "";
	$dbname = "online_pharmacy";
		
	$con = new mysqli($servername, $username, $password, $dbname);
		
    //check connection
	if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}	

	$sql = "SELECT * FROM medicine_stock";
	$result = mysqli_query($con,$sql);
?>