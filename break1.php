<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Break</title>
</head>
<body>
	<?php
		$a=10;

		for ($a=1; $a<=10; $a++) { 
			if ($a==6) {
				break;
			}
			echo($a . "<br>");
		}
	?>
</body>
</html>
