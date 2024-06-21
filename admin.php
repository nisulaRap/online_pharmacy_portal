<?php require 'header.php'?>

<!DOCTYPE html>
<html>
<head>
        <title>Admin Account Page</title>
        <link rel="stylesheet" href="styles/admin.css"> 


    </head>
    <body>
    <div class="Adaccount">
        <h2 class="Adminster8">Administrator</h2>
       <img src="images/img.jpg" width="200px" height="200px" class="imgpf">
        
        <form action="insertDetails.php" method="POST" enctype="multipart/form-data">
            <div class="ADdetails">
                

                <h3><u>Admin details</u></h3>
                <h4 class="ad">Admin Name: Jessie Walter </h4>
                <h4 class="ad">Admin Email: walterjes1234@gmail.com</h4>
                <h4 class="ad">Contact No.: 0765439021</h4>
                
            </div>

            <hr>

            <div>
            <center>    
            
            <div>
                <table class = "Medication">
                    <tr>
                        <th>Content-1</th>
                        <th>Content-2</th>
                    </tr>
                    <tr>
                        <td class="q1">Request-1</td>
                        <td class="q1">Request-1</td>
                    </tr>
                    <tr>
                        <td class="q1">Request-2</td>
                        <td class="q1">Request-2</td>
                    </tr>

                    <tr>
                        <td class="q1">Request-3</td>
                        <td class="q1">Request-3</td>
                    </tr>

                    <tr>
                        <td class="q1">Request-4</td>
                        <td class="q1">Request-4</td>
                    </tr>

                </table>
            </div>
                
            </center>
                <table border="0" class="form8 f8">
                    <tr>
                        <td class="partion">Manage Users<i style="margin-left: 20px;" class="fa-solid fa-address-card"</td>
                    </tr>
                    <tr class="adm">
                        <td class="r8"><br>
                        <input type="text" class="admin-det" name="old_username" placeholder="old username">
                        <input type="text" class="admin-det" name="new_username" placeholder="new username">
                        <input type="text" class="admin-det" name="renew_username" placeholder="Re-enter new username">
                        <button class="admin-btn">Change Username</button>
                        </td>
                    </tr>     
            
                </table>
                
            </div>
<!-- Display the result message -->
<?php if (isset($message)) : ?>
    <div><?php echo $message; ?></div>
<?php endif; ?>
<!--Please replace "localhost", "username", "password", and "your_database_name" with your actual MySQL database connection details.

This code checks if the form is submitted, connects to the database, prepares an SQL statement to update the username, executes the statement, and displays a success or error message. Additionally, it's important to sanitize and validate user input to enhance security in a real-world application.
        -->
        </form>
    <div>    
</body>

</html>
<?php require 'footer.php' ?>