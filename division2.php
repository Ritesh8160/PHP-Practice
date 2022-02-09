<!DOCTYPE html>
<html>
<body>
	<Form method="POST">
	Enter The First Number
	<input type="Number" name="a"/> <br> <br>

	Enter The Second Number
	<input type="Number" name="b"/> <br> <br>

	<input type="Submit" name="submit" value="submit"/> <br> <br>
	
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))  
    {  
        $a=$_POST['a'];  
        $b=$_POST['b'];  
        $Division=$a/$b;     
echo "The Division of ". $a . "and". $b ." is: ".$Division; 
}  

?>
