<!DOCTYPE html>
<html>
<body>
	<Form method="POST">
	Enter The First Number
	<input type="Number" name="a"/>

	Enter The Second Number
	<input type="Number" name="b"/>

	<input type="Submit" name="submit" value="submit"/>
	
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))  
    {  
        $a=$_POST['a'];  
        $b=$_POST['b'];  
        $Multipication=$a*$b;     
echo "The multipication of ". $a . "and". $b ." is: ".$Multipication; 
}  

?>
