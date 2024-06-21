<?php
    session_start();

    require_once 'config.php';
    require_once 'header.php';

    if (isset($_SESSION['Email'])) {
        $currentemail = $_SESSION['Email'];
        $sql = "SELECT * FROM register_user WHERE Email = '$currentemail'";
        $result = $con->query($sql);

        if (!$result) {
            die("Error in SQL query: " . $con->error); 
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Account Page</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/myAccount.js"></script>
</head>
<body class="useraccountbg">
<?php
if (isset($_SESSION['Email']) && $result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<img src='images/{$row['Image']}' width='200px' height='200px' class='img3'>";
    }
} else {
    echo "No results";
}
?>

<form action="updateUserAccount.php" method="POST" onsubmit="return checkPassword()">
    <div class="r6">
        <label for="myfile" class="f2">Edit Profile :</label>
        <input type="file" name="myfile" id="myfile">
    </div>
    <div>
        <?php
		if (isset($_SESSION['Email'])) {
			$currentemail = $_SESSION['Email'];
			$sql = "SELECT * FROM register_user WHERE Email = '$currentemail'";
			$result = $con->query($sql);

			if (!$result) {
				die("Error in SQL query: " . $con->error);
			}
		}
		
        if (isset($_SESSION['Email']) && $result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <table border="0" class="form1 f1">
            <tr>
                <td class="r1"><u>User Details</u></td>
            </tr>
            <tr>
                <td class="r2"><label for="uid" class="f2">User ID :</label></td>
                <td class="r2"><input type="text" id="uid" name="uid" value="<?php echo $row['User_ID']; ?>" size="50" class="r4" placeholder="User Id" required></td>
            </tr>
            <tr>
                    <td class="r2"><label for="fname" class="f2">First name :</label></td>
                    <td class="r2"><input type="text" id="fname" name="fname" value="<?php echo $row['First_Name']; ?>" size="50" class="r4" placeholder="First name" required></td>
                </tr>
                <tr>
                    <td class="r2"><label for="lname" class="f2">Last name :</label></td>
                    <td class="r2"><input type="text" id="lname" name="lname" value="<?php echo $row['Last_Name']; ?>" size="50" class="r4" placeholder="Last name" required></td>
                </tr>
                <tr>
                    <td class="r2"><label for="uemail" class="f2">Email address :</label></td>
                    <td class="r2"><input type="text" id="uemail" name="uemail" value="<?php echo $row['Email']; ?>" size="50" class="r4" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></td>
                </tr>
                <tr>
                    <td class="r2"><label for="ucity" class="f2">City / Town :</label></td>
                    <td class="r2"><input type="text" id="ucity" name="ucity" value="<?php echo $row['City']; ?>" size="50" class="r4" placeholder="City / Town" required></td>
                </tr>
                <tr>
                    <td class="r2"><label for="country" class="f2">Country :</label></td>
                    <td class="r2">
                        <select name="country" id="country" class="r5">
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Australia">Australia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="India">India</option>
                            <option value="England">England</option>
                            <option value="Singapore">Singapore</option>
                            <option value="United States">United States</option>
                        </select>
                    </td>
                </tr>
        </table>
        <?php
        }
        ?>

        <table border="0" class="form2 f1">
            <tr>
                <td class="r1"><u>Change Password</u></td>
            </tr>
            <tr>
                <td class="r2"><label for="cpwd" class="f2">Current password :</label><br>                  
					<input type = "password" onfocus="this.value=''" id="cpwd" name = "cpwd" placeholder = "Current password" class = "r3" size="50" required/>
                </td>
            </tr>
            <tr>
                <td class="r2"><label for="npwd" class="f2 r1">New password :</label><br>
					<input type = "password" onfocus="this.value=''" id="npwd" name = "npwd" placeholder = "New password" class = "r3" size="50" required/>
                </td>
                <td class="r2"><label for="cfpwd" class="f2 r1">Confirm password :</label><br>
					<input type = "password" onfocus="this.value=''" id="cfpwd" name = "cfpwd" placeholder = "Confirm password" class = "r3" size="50" required/>
                </td>
            </tr>
        </table>
        <table class="form3">
            <tr>
                <td><input type="submit" name="submit" value="Update" class="subbtn2">&emsp;</td>
                <td><input type="reset" value="Cancel" class="subbtn2"></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>
<?php require 'footer.php'; ?>