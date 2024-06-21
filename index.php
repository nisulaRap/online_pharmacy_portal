<?php 
	session_start();
	
	require_once 'config.php';
	require_once 'component.php';

	// Check if the user is not logged in, redirect to the login page
	if (isset($_SESSION['username'])) {
		header("Location: Login.php");
		exit();
	}
	

	//Inserted cart page
	if(isset($_POST['add'])){
		if(isset($_SESSION['cart'])){
			
			$item_array_id = array_column($_SESSION['cart'],"product_id");
			
			if(in_array($_POST['product_id'],$item_array_id)){
				 
				
				echo "<script>alert('Product is already added in the cart...!')</script>";
				//echo "<script>window.location = 'index.php'</script>";	
				
			}else{
				$count = count($_SESSION['cart']);
				$item_array = array(
					'product_id' => $_POST['product_id']
				);
				$_SESSION['cart'][$count] = $item_array;		
			}
			
		}else{
			$item_array = array(
				'product_id' => $_POST['product_id']
			);
			
			$_SESSION['cart'][0] = $item_array;
		}
	}

?>

<html>
<head>
<title>Online Pharmacy Portal</title>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" href = "styles/index.css">
<link rel = "stylesheet" href = "styles/slide.css">
<link rel = "stylesheet" href = "styles/list.css">
</head>
<body>

<!-- Display Logo with Menu bar -->
<?php require_once 'header.php' ?>
<!-- Slide animation -->
<div class="container2">
	<div class = "slider">
			<div class = "slides">
				<input type = "radio" name = "radio-btn" id = "radio1">
				<input type = "radio" name = "radio-btn" id = "radio2">
				<input type = "radio" name = "radio-btn" id = "radio3">
				<input type = "radio" name = "radio-btn" id = "radio4">
				
				<div class = "slide first">
					<img src = "images/a.jpg" alt = "">
				</div>
				<div class = "slide">
					<img src = "images/b.jpg" alt = "">
				</div>
				<div class = "slide">
					<img src = "images/c.jpg" alt = "">
				</div>
				<div class = "slide">
					<img src = "images/d.jpg" alt = "">
				</div>
				
				<div class = "navigation-auto">
					<div class = "auto-btn1"></div>
					<div class = "auto-btn2"></div>
					<div class = "auto-btn3"></div>
					<div class = "auto-btn4"></div>
				</div>
				
				<div class = "navigation-manual">
					<label for = "radio1" class = "manual-btn"></label>
					<label for = "radio2" class = "manual-btn"></label>
					<label for = "radio3" class = "manual-btn"></label>
					<label for = "radio4" class = "manual-btn"></label>
				</div>
			</div>
		</div>
	

		<div class="In">
			<p>Welcome to HealthMart, your trusted destination for convenient and reliable healthcare solutions. At HealthMart, we understand the importance of accessible and affordable medication, which is why we are dedicated to providing you with a seamless online pharmacy experience.
			With a wide range of prescription and over-the-counter medications, as well as health and wellness products, we are committed to helping you and your loved ones achieve and maintain optimal health. Our user-friendly platform allows you to easily browse, order, and have your medications delivered right to your doorstep, saving you time and ensuring your well-being is our top priority.
			</p>
		</div>
	</div>
	
	<script>
		var counter = 1;
		setInterval(function(){
			document.getElementById('radio' + counter).checked = true;
			counter ++;
			if(counter > 4){
				counter = 1;
			}
		}, 5000);
	
	</script>

	<div class = "row text-center py-5">
        <?php
            if($result->num_rows > 0){
        	    while($row = $result->fetch_assoc()){
					component($row['Name'],$row['Price'],$row['Image'],$row['Drug_ID']);
                }
            }
            else{
                echo "no results";
            }
        ?>
	</div>

</body>
<?php require_once 'footer.php' ?>
</html>