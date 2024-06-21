<?php require_once 'header.php'?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="styles/register.css">
	</head>
	<body>
		<div class="container">
			<h2>Register</h2>
			<form action="insertRegistration.php" method="POST" enctype="multipart/form-data" >
				<label for="fullname">Full Name:</label>
				<input type="text" id="fullname" name="fullname" class="txt" required>

				<label for="dob">DOB (YYYY/MM/DD):</label>
				<input type="text" id="dob" name="dob" placeholder="YYYY/MM/DD" class="txt" required>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" class="mail" required>

				<label for="username">Create Username:</label>
				<input type="text" id="username" name="username" class="txt" required>

				<label for="password">Create Password:</label>
				<input type="password" id="password" name="password" class="pwd" required>

				<label for="confirm-password">Confirm Password:</label>
				<input type="password" id="confirm-password" name="confirm-password" class="pwd" required>

				<button type="submit" class="btn">Submit</button>
			</form>
		</div>

		<script>
			// JavaScript code for form validation and submission
			document.getElementById("registration-form").addEventListener("submit", function(event) {
				event.preventDefault();

				// Retrieve form data
				var fullname = document.getElementById("fullname").value;
				var dob = document.getElementById("dob").value;
				var email = document.getElementById("email").value;
				var username = document.getElementById("username").value;
				var password = document.getElementById("password").value;
				var confirmPassword = document.getElementById("confirm-password").value;

				// Simple password confirmation check
				if (password !== confirmPassword) {
					alert("Passwords do not match. Please try again.");
					return;
				}			
				alert("Registration successful!");
			});
		</script>
	</body>
</html>
<?php require_once 'footer.php'?>

