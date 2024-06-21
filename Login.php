<?php 
    session_start();

    require_once 'header.php';
    require_once 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check the database for the user
        $sql = "SELECT * FROM register_user WHERE Email = ? AND Password = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Store user information in a session variable
            $_SESSION['Email'] = $username;

            // Redirect to the Home page
            header("Location: index.php");
        } else {
            echo "Login failed. Check your username and password.";
        }

        $stmt->close();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <div class="container">
        <form id="login-form" method="POST">
            <h1>Login</h1>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" size="58" class="L1" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" size="58" class="L1" required>
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="actions">
                <button type="submit" class="sign-in" id="login-button">LOGIN</button>
            </div>
        </form>
        <p class="account">Still don't have an account? </p>
        <div class="signup">
            <button type="submit" class="Sign-up"><a href="register.php" id="sign-up">Sign Up</a></button>
        </div>
        <div class="footer-links">
            <a href="terms_and_conditions.php">Terms and Conditions</a>
            <a href="Privacy and Cookies Policy.php">Privacy</a>
        </div>
    </div>
    <script>
        document.getElementById("login-button").addEventListener("click", function () {
            // Get the username and password values
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Perform client-side validation (add more validation as needed)
            if (username.trim() === "" || password.trim() === "") {
                alert("Username and password are required.");
            } else {
                // Submit the form (you can add AJAX here to send data to the server)
                document.getElementById("login-form").submit();
            }
        });
    </script>
</body>
</html>
<?php require 'footer.php' ?>
