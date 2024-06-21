<?php require 'header.php' ?>
<html>
    <head>
        <title>Contact Us </title> 
        <link rel="stylesheet" href="styles/styles2.css">

    </head> 
	<body class="tab1">
		<table border="0" class="tb1">
		<form action="insertContacts.php" method="POST">
			<tr>
				<td class="t1"><label for ="Fname">Name :</label></td>
				<td class="t2"><input type="text" id="Fname" name = "name" class="btvalue" placeholder="Name" required></td>
			</tr>
			<tr>
			<td class="t1"><label for ="salutation">salutation :</label></td><br>
			 <td class="t2"><input type="text" id="salutation" name = "salutation" class="btvalue"  placeholder="saltation"  required></td>
			</tr>
			<tr>
			<td class="t1"><label for ="Email">email :</label></td><br>
			<td class="t2"><input type="email" id="Email" name = "email" class="btvalue" placeholder="example1@" required ></td>
			</tr>
			<tr>
			<td class="t1"><label for ="No">Contact number :</label></td><br>
			<td class="t2"><input type="number" id="No" name = "contactNumber" class="btvalue" placeholder="076*******" required ></td>
			</tr>
			<tr>
			 <td class="t1"><label for ="comment">comment :</label></td><br>
			<td class="t2"><textarea id="comment" name = "comment" rows="4" colms="80" class="btvalue"  required> </textarea></td>
			</tr>
			<tr>
			<td><button id="bn-2" class="btn2">submit</button></td>
			</tr>
		</form>
		</table>
		<div class="lct">
			<h2>Location</h2>
			<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80392187811!2d79.81500559926612!3d6.921922085340853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1696496786081!5m2!1sen!2slk" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
		</div>
	</body>
</html> 
<?php require 'footer.php' ?>