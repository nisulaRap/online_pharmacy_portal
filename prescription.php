<?php require 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Prescription</title>
    <link rel="stylesheet" href="styles/prescription.css">
</head>
<body>
    <div class="prescription">
        <h1>Doctor's Prescription</h1>

        <form class="pres" action="insertPerscription.php" method="POST" enctype="multipart/form-data">
            <label for="name">Your Name (required):</label>
            <input type="text" id="name" name="name" required><br>

            <label for="age">Your Age (required):</label>
            <input type="text" id="age" name="age" required><br>

            <label for="email">Your Email (required):</label>
            <input type="email" id="email" name="email" required><br>

            <label for="contact">Your Contact No.(required):</label>
            <input type="text" id="contact" name="contact" required><br>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <label for="prescription">Doctor's Prescription(required - Maximum upload file size is 4MB):</label>
            <input type="file" id="prescription" name="prescription" accept="image/*" required><br>

            <input type="submit" class="submit" value="Submit">
        </form>
    </div>
    <?php require 'footer.php' ?>
</body>
</html>
