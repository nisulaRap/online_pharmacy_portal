<?php 
    require 'config.php';
    require 'component.php';
    require 'header.php';
    		
	$sql = "SELECT * FROM heart";
	$result = $con->query($sql);

    $sql2 = "SELECT * FROM cn_system";
	$result2 = $con->query($sql2);

    $sql3 = "SELECT * FROM ent";
	$result3 = $con->query($sql3);

    $sql4 = "SELECT * FROM diabetes";
	$result4 = $con->query($sql4);

    $sql5 = "SELECT * FROM eye";
	$result5 = $con->query($sql5);

    $sql6 = "SELECT * FROM infections";
	$result6 = $con->query($sql6);

    $sql7 = "SELECT * FROM musle_and_joint";
	$result7 = $con->query($sql7);
?>

<html>
    <head>
        <title>Categories Page</title>
        <!--Add to cart icon in bootstrap link-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/list.css">
    </head>
    <body>
        
        <!--Medicine list 1-->

        <h1 id="p1">Heart</h1>
        <hr class="u1">

        <div class = "container">
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
        </div>

        <!--Medicine list 2-->

        <h1 id="p2">Central Nerovous System</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result2->num_rows > 0){
                        while($row2 = $result2->fetch_assoc()){
                            component($row2['Name'],$row2['Price'],$row2['Image'],$row2['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

        <!--Medicine list 3-->

        <h1 id="p3">Ear, Nose, Throat</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result3->num_rows > 0){
                        while($row3 = $result3->fetch_assoc()){
                            component($row3['Name'],$row3['Price'],$row3['Image'],$row3['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

        <!--Medicine list 4-->

        <h1 id="p4">Diabetes</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result4->num_rows > 0){
                        while($row4 = $result4->fetch_assoc()){
                            component($row4['Name'],$row4['Price'],$row4['Image'],$row4['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

        <!--Medicine list 5-->

        <h1 id="p5">Eye</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result5->num_rows > 0){
                        while($row5 = $result5->fetch_assoc()){
                            component($row5['Name'],$row5['Price'],$row5['Image'],$row5['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

        <!--Medicine list 6-->

        <h1 id="p6">Infections</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result6->num_rows > 0){
                        while($row6 = $result6->fetch_assoc()){
                            component($row6['Name'],$row6['Price'],$row6['Image'],$row6['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

        <!--Medicine list 7-->

        <h1 id="p7">Muscle & Joint</h1>
        <hr class="u1">

        <div class = "container">
	        <div class = "row text-center py-5">
                <?php
                    if($result7->num_rows > 0){
                        while($row7 = $result7->fetch_assoc()){
                            component($row7['Name'],$row7['Price'],$row7['Image'],$row7['Drug_ID']);
                        }
                    }
                    else{
                        echo "no results";
                    }
                ?>
	        </div>
        </div>

    </body>
</html>

<?php require 'footer.php' ?>