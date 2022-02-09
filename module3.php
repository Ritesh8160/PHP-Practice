<!DOCTYPE html>
<html>
<body>
	<Form method="POST">
	Enter The First Number
	<input type="Number" name="x"/><br> <br>

	Enter The Second Number
	<input type="Number" name="y"/> <br> <br>

	<input type="Submit" name="submit" value="submit"/> <br> <br>
	
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))  
    {  
        $x=$_POST['x'];  
        $y=$_POST['y'];  
        $module=$x%$y;     
echo "The module of ". $x . "and". $y ." is: ".$module; 
}  

?>
