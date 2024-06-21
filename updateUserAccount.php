<?php
	// Start a PHP session
	session_start();

	// Include an external configuration file (config.php)
	require_once 'config.php';

	// Check if the 'Email' session variable is set
	if (isset($_SESSION['Email'])) {
		$currentemail = $_SESSION['Email'];
		$sql = "SELECT * FROM register_user WHERE Email = '$currentemail'";

		// Execute the query and store the result
		$result = $con->query($sql);
		
		// Check if there was an error in the SQL query
		if (!$result) {
			die("Error in SQL query: " . $con->error); // Output an error message
		}
	}

	// Check if the 'Email' session variable is set and if there are rows in the result
	if (isset($_SESSION['Email']) && $result && $result->num_rows > 0) {
		 // Fetch the first row from the result
		$row = $result->fetch_assoc();

		$checkcurrentpwd = $row['Password']; 
	}

	// Get the current password submitted a form
	$currentpwd = $_POST["cpwd"];

	if($checkcurrentpwd == $currentpwd){
		if (isset($_POST['submit'])) {
			$userid = $_POST["uid"];
			$firstname = $_POST["fname"];
			$lastname = $_POST["lname"];
			$email = $_POST["uemail"];
			$city = $_POST["ucity"];
			$country = $_POST["country"];		
			$newpwd = isset($_POST["npwd"]) ? $_POST["npwd"] : null; // Get a new password from the form if it's set, otherwise set it to null
			$profile = $_POST["myfile"];		
			
			// Update user information
			$sql = "UPDATE register_user
					SET First_Name = '$firstname', Last_Name = '$lastname', Email = '$email', Password = '$newpwd', City = '$city', Image = '$profile', Country = '$country'  
					WHERE Email = '$email' ";
	
			$data = mysqli_query($con, $sql);
	
			if ($data) {
				echo "<script>alert('Record Updated!!')</script>
					<script>window.location = 'User_account.php'</script>";
			} else {
				echo "<script>alert('Error in Update')</script>";
			}
		}
	}else{
		echo "<script>alert('Current Password Mismatch. Try Again!!')</script>
				<script>window.location = 'User_account.php'</script>";
	}

	
	mysqli_close($con);
?>
