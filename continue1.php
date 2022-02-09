<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Continue </title>
</head>
<body>
	<?php
			$a=100;
			for ($a=1; $a<=10; $a++) 
			{ 
				if ($a==2)
				{
					continue;  //skip this nubmer
				}
				if ($a==7)
				{
					continue;  //skip this nubmer
				}

				echo $a . "<br>";
			}
	?>

</body>
</html>