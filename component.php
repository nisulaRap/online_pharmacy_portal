<?php 
//Get table list in Database.After this sent to index.php (Home Page) 
function component($medicinename,$medicineprice,$medicineimg,$drugid){

	$element = "
	<div class = \"col-md-3 col-sm-6\">
			<form action = \"index.php\" method = \"POST\">
				<div class = \"card\">
					<div>
						<center><img src = \"$medicineimg\" alt = \"image1\" class = \"card-img-top\"></center>
					</div>
					<div class = \"card-body\">
						<h5 class = \"card-title\">$medicinename</h5>
						<h5>
							<center><span class = \"price\">Rs.$medicineprice.00</span></center>
						</h5>
						<button type = \"submit\" class = \"btn-warning\" name = \"add\">Add to Cart <i class = \"fa fa-shopping-cart\"></i></button>
						<input type = 'hidden' name = 'product_id' value = '$drugid'>
					</div>
				</div>
			</form>
			<br>
		</div>
	
	";
	echo $element;
}

function cartElement($medicineimg,$medicinename,$medicineprice,$drugid){
	$element = "	
	<form action = \"cart.php?action=remove&id=$drugid\" method = \"POST\" class = \"cart-items\">
					<div class = \"border rounded\">
						<div class = \"row bg-white\">
							<div class = \"col-md-3 pl-0\">
								<img src = \"$medicineimg \" alt = \"image1\" class = \"img-fluid\">
							</div>
							<div class = \"col-md-6\">
								<h5 class = \"pt-2\">$medicinename</h5>
								<small class = \"text-secondary\">Seller: dailytuition</small>
								<h5 class = \"pt-2\">Rs.$medicineprice</h5>
								<button type = \"submit\" class = \"btn btn-warning\">Save for Later</button>
								<button type = \"submit\" class = \"btn btn-danger mx-2\" name = \"remove\">Remove</button>
							</div>
						</div>
					</div>				
				</form>	
	";
	echo $element;	
}