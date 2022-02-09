<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Continue </title>
</head>
<body>
	<?php
			$a=10000;
			for ($a=5000; $a<=10000; $a++) 
			{ 
				if ($a==9000)
				{
					continue;  //skip this nubmer
				}
				if ($a==6000)
				{
					continue;  //skip this nubmer
				}

				echo $a . "<br>";
			}
	?>

</body>
</html>