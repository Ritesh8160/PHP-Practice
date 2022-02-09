<!DOCTYPE html>
<html>
<head>

	<title> switch case </title>
</head>
<!--
<body>
	<Form method="POST">
	<label> Enter the Marks </label><br> <br>
	<input type="number" name="number" value="0">

	<button>Process</button>
</Form>
-->


<?php
	$tempreture="10_degree";
	switch ($tempreture){
			
			case '45_degree';
			echo "High tempreture ";
			break;

			case '30_degree';
			echo "Normal tempreture ";
			break;

			case '20_degree';
			echo "Cool tempreture ";
			break;

			case '10_degree';
			echo "Cold tempreture ";
			break;

			defalut:
			echo "Not a Applicable";
			break;
	}

	?>
</body>
</html>