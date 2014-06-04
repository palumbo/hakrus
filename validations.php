<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Validatons</title> 
</head> 

<body> 

	<?php 
	
	// * presence
	$value = "x"; 
	if (!isset($value) || empty($value)) { 
		echo "Validation failed"; 
	}

	// * string length
	$value = "abcef"; 
	$min = 3; 
	if (strlen($value) < $min) { 
		echo "Validation failed: String Length"; 
	}
	
	$max = 6; 
	if (strlen($value) > $max) { 
		echo "Validation failed: String Length Max Exceeded"; 
	}

	// * type
	$value = "1"; 
	if (!is_string($value)) { 
		echo "Validation Failed: Not a string"; 
	}

	// * includsion in a set
	$array = array("1", "2", "3", "4"); 
	$value = "4"; 
	if (!in_array($value, $array)) { 
		echo "Validation failed: Not found in set"; 
	}

	// * uniqueness
	// used with a database
	
	// * format
	if (!preg_match("/PHPx/", "PHP is fun")){ 
		echo "Validation failed PREG check"; 
	}

	?>

</body> 
</html> 