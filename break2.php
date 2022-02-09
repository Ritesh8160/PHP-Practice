<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Break</title>
</head>
<body>
	<?php
		$a=10000;
		for ($a=1; $a<=10000; $a++) { 
			if ($a==555) {
				break;
			}
			echo($a . "<br>");
		}
	?>
</body>
</html>
