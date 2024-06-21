<?php
		session_start();
		require_once 'component.php';
		require_once 'config.php';
		
		if(isset($_POST['add'])){
		if(isset($_SESSION['cart'])){
			
			$item_array_id = array_column($_SESSION['cart'],"product_id");
			
			if(in_array($_POST['product_id'],$item_array_id)){
				 
				
				echo "<script>alert('Product is already added in the cart...!')</script>";
				echo "<script>window.location = 'index.php'</script>";	
				
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
		
	// Get the search term from the POST request
	$search = $_POST['search'];

	// Construct the SQL query based on the search term
	$sql = "SELECT * FROM (SELECT * FROM heart WHERE Name LIKE '%$search%') AS heart
	UNION ALL
	SELECT * FROM (SELECT * FROM cn_system WHERE Name LIKE '%$search%') AS cn_system
	UNION ALL
	SELECT * FROM (SELECT * FROM ent WHERE Name LIKE '%$search%') AS ent
	UNION ALL
	SELECT * FROM (SELECT * FROM diabetes WHERE Name LIKE '%$search%') AS diabetes
	UNION ALL
	SELECT * FROM (SELECT * FROM eye WHERE Name LIKE '%$search%') AS eye
	UNION ALL
	SELECT * FROM (SELECT * FROM infections WHERE Name LIKE '%$search%') AS infections
	UNION ALL
	SELECT * FROM (SELECT * FROM musle_and_joint WHERE Name LIKE '%$search%') AS musle_and_joint";

	// Execute the SQL query
	$result = mysqli_query($con, $sql);
?>

<html>
<head>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/list.css">

</head>
<body>
<!-- Display Logo with Menu Bar -->
<?php require_once 'header.php' ?>

<br>

<div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            component($row['Name'],$row['Price'],$row['Image'],$row['Drug_ID']);
                        }
                    }
                    else{
                        echo "<script>alert('Not Found..')</script>";
                    }
                ?>
	        </div>
        </div>
</body>
</html>

<?php require_once 'footer.php' ?>
