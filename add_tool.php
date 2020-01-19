<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="#"/>
	<title>Add Tool</title>
</head>
<body>
	<div class="wrap">
		<h1 class="bigtext">Add your tool</h1>
		<div class="content">
			<form action="includes/add_tool.inc.php" method="POST">
				<p class="smalltext">Tool Name</p>
				<input type="text" name="tool_name"/>
				<p class="smalltext">Price</p>
				<input type="text" name="price"/>
				<br/>
				<button type="submit" name="submit">Add your tool</button>
			</form>
			<?php
				$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if(strpos($fullUrl, "signup=empty") == true) {
					echo "<p class='error'>You did not fill out all fields</p>";
				}
				if(strpos($fullUrl, "signup=success") == true) {
					echo "<p class='success'>Your tool was successfully added!</p>";
					header("Location: home.php");
				}
			?>
		</div>
	</div>
</body>
</html>
