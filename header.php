<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/styles.css"> 
        <link rel="stylesheet" href="styles/cart.css"> 
    </head>
    <body>
        <div class="searchside">
            <img src="images/logo.png" width="250px" height="50px" class="img img2">
            <div class="search">
                <form action="search.php" method="POST">
                    <input type="text" name="search" id="search" placeholder="Search..." class="inp1">
                    <input type="submit" value="search" class="subbtn"> 
                </form>
            </div>    
            <a href="Login.php" class="rightside">Sign in</a>
            <img src="images/user.png" width="60px" height="60px">
            <a href="User_account.php" class="rightside">My Account</a>
        </div>

        <div>
            <nav>
                <ul>
                    <li><a href = "index.php">HOME</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">MEDICINE</button>
                        <div class="dropdown-content">
                            <a href="categories.php #p1">HEART</a>
                            <a href="categories.php #p2">CENTRAL NEROVOUS SYSTEM</a>
                            <a href="categories.php #p3">EAR, NOSE, THROAT</a>
                            <a href="categories.php #p4">DIABETES</a>
                            <a href="categories.php #p5">EYE</a>
                            <a href="categories.php #p6">INFECTIONS</a>
                            <a href="categories.php #p7">MUSCLE & JOINT</a>
                        </div>
                    </div>
                    <li><a href = "ContactUs.php">CONTACT US</a></li>
                    <li><a href = "about us.php">ABOUT US</a></li>
                    <li><a href = "customer.php">CUSTOMER SERVICE</a></li>
                    <li><a href = "cart.php"><i class = "fa fa-shopping-cart"></i>&nbsp;&nbsp;CART</a>
                        <!-- Display cart count -->
                        <?php
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<span class = \"cartnum\">$count</span>";
                            }else{
                                echo "<span class = \"cartnum\">0</span>";
                            }
                        ?>
                    </li>
                </ul>
            </nav>
        </div>
    </body>
</html>