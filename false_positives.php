<!DOCTYPE HTML5>
<html> 

<head> 
	<title>False Positives</title> 
	<link href="index.css" rel="stylesheet" /> 
</head> 

<body> 


	<?php 
	
		// * presence
		$value = trim("   "); 
		if (!isset($value) || empty($value && !is_numeric($value))) {
			echo "Validation Failed!"; 
		}
	?>


</body> 
</html> 