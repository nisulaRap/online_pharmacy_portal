<?php
require_once 'config.php';

$name = $_POST['fullname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm-password']; 

$sql = "INSERT INTO register (fullname, dob, email, username, password, confirm_password) VALUES ('$name', '$dob', '$email', '$username', '$password', '$confirm')"; 

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<script>alert('You have been registered')</script>";
    echo "<script>window.location='register.php'</script>";
} else {
    echo "error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
