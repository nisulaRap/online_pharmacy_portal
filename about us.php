<?php require_once 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles/about us.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h2>About Us</h2>
        </div>
        <div class="paragraph">


            <p>At HealthMart, we are your trusted partner on your journey to better health. With a deep commitment to quality, accessibility, and personalized care, we've reimagined the way you experience healthcare.<br><br>


<div class="paragraph" id="hidden-paragraph">
    
As a leading online pharmacy portal, we offer a vast selection of prescription and over-the-counter medications, health products, and expert guidance—all at your fingertips. Our team of dedicated pharmacists and healthcare professionals work tirelessly to ensure your well-being by providing safe, affordable, and convenient healthcare solutions.</p>
</div>

            <div class="button-box">
               <button class="button" id="learn-more-button" onclick="toggleParagraph('hidden-paragraph')">Learn More</button>

            </div>
        </div>
        <div class="mission">
            <h3>Our Mission</h3>
            <p>"Our mission is to empower individuals to take control of their health by offering a comprehensive and user-friendly online pharmacy platform."</p>
        </div>
        <div class="vision">
            <h3>Our Vision</h3>
            <p>"To be the leading online pharmacy portal, revolutionizing healthcare accessibility by providing safe, convenient, and affordable medication solutions for individuals and communities worldwide."</p>
        </div>
        <div class="profile-section">
            <div class="profile">
                <img src="images/ceo.jpg" alt="Profile 1" ">
                <div class="profile-description">
                    <h3>John Doe</h3>
                    <p>CEO</p>
                </div>
            </div>
            <div class="profile">
                <img src="images/founder.jpg" alt="Profile 2">
                <div class="profile-description">
                    <h3>Jane Smith</h3>
                    <p>Co-founder</p>
                </div>
            </div>
            <div class="profile">
                <img src="images/cofounder.jpg" alt="Profile 3">
                <div class="profile-description">
                    <h3>David Johnson</h3>
                    <p>Co-founder</p>
                </div>
            </div>
        </div>
    </div>

<script>
    function toggleParagraph(paragraphId) {
        var paragraph = document.getElementById(paragraphId);
        if (paragraph.style.display === 'none' || paragraph.style.display === '') {
            paragraph.style.display = 'block';
        } else {
            paragraph.style.display = 'none';
        }
    }
</script>



   
</body>
</html>
<?php require_once 'footer.php'?>