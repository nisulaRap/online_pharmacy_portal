<?php
	session_start();
	
	require_once 'config.php';
	require_once 'component.php';	
	
	//Remove cart list
	if(isset($_POST['remove'])){
		if($_GET['action'] == 'remove'){
			foreach($_SESSION['cart'] as $key => $value){
				if($value["product_id"] == $_GET['id']){
					unset($_SESSION['cart'][$key]);
					echo "<script>alert('Product has been Removed..!')</script>";
					echo "<script>window.location = 'cart.php'</script>";
				}
			}
		}	
	}
?>


<html>
<head>
<title>Cart</title>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel = "stylesheet" href = "styles/Style1.css">
</head>
<body class = "big-light">

<?php
	//Display Logo with Menu Bar
	require_once 'header.php';
?>

<div class = "container-fluid">
	<div class = "row px-5">
		<div class = "col-md-7">
			<div class = "shopping-cart cartwidth">
				<h3>Cart</h3>
				<hr>
				<!-- Show Cart list -->
				<?php
					$qty = 1;
					$total = 0;
					if(isset($_SESSION['cart'])){
						$drug_id = array_column($_SESSION['cart'],"product_id");
						
						while($row = mysqli_fetch_assoc($result)){
							foreach($drug_id as $id){
								if($row['Drug_ID'] == $id){
									cartElement($row['Image'],$row['Name'],$row['Price'],$row['Drug_ID']);
									$total = $total + $row['Price'];
								}							
							}						
						}
					}else{
						echo "<h5>Cart is Empty</h5>";
					}
				?>
				
			</div>
		</div>
		<!-- Show Price Details -->
		<div class = "col-md-3 offset-md-1 border rounded mt-5 bg-white h-30 pricemargin">
			<div class = "pt-4">
				<h4>PRICE DETAILS</h4>
				<hr>
				<div class = "row price-details">
					<div class = "col-md-6">
					<?php
						if(isset($_SESSION['cart'])){
							$count = count($_SESSION['cart']);
							echo "<h6>Price($count items)</h6>";
						}else{
							echo "<h6>Price(0 items)</h6>";
						}					
					?>
					<h6>Delivery Charges</h6>
					<hr>
					<h6>Amount Payable</h6>
					</div>
					<div class = "col-md-6">
						<h6>Rs.<?php echo $total; ?></h6>
						<h6 class = "text-success">FREE</h6>
						<hr>
						<h6>Rs.<?php echo $total; ?></h6>
					</div>
				</div>
			</div>
			<button id="submit-button" class = "buynowbtn">Buy Now</button>
		
		</div>
	</div>
</div>

<script>
        // JavaScript code for submitting the order (you can implement actual submission logic here)
        document.getElementById("submit-button").addEventListener("click", function() {
            alert("Order submitted!");
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<?php
	//Display Logo with Menu Bar
	//require_once 'footer.php';
?>
</body>
</html>