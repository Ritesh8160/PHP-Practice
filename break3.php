<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Break</title>
</head>
<body>
	<?php
		$a=1000000;
		for ($a=5555; $a<=1000000; $a++) { 
			if ($a==6666) {
				break;
			}
			echo($a . "<br>");
		}
	?>
</body>
</html>
