<pre>
<?php 
	// print_r($_POST); 

	$die1 = ""; 
	$die2 = ""; 
	$die3 = ""; 

	if (isset($_POST['die1'])) { 
		$die1 = rand(1,6); 
		 		
	}

	if (isset($_POST['die2'])) { 
		$die2 = rand(1,6); 
		}

	if (isset($_POST['both'])) { 
		$die1 = rand(1,6); 
		$die2 = rand(1,6); 
		// echo $die1 . " " . $die2; 
	}
	
	if (isset($_POST['20die'])) { 
		$die3 = rand(1,20); 
	}
	
?>

</pre>


<!DOCTYPE HTML5>
<html> 

<head> 
<title>Die Simulation</title> 
</head> 

<body> 

<form action="die.php" method="post"> 
<?php echo "Die 1: {$die1}"; ?> <br /> 
<input type="submit" name="die1" value="Roll Die 1" /> <br /> 
<br /> 
<?php echo "Die 2: {$die2}"; ?> <br /> 
<input type="submit" name="die2" value="Roll Die 2" /> <br /> 
<br /> 
<input type="submit" name="both" value="Roll Both" /> <br /> 
<hr /> 
<hr /> 
<?php echo "20 Sided Die: {$die3}"; ?> <br /> 
<input type="submit" name="20die" value="Roll 20 Die" /> <br /> 


</form>





</body> 
</html> 



