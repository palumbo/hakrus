<html> 

<head> 
	<title>Test Page</title>
	<style type="text/css"> 
	
	body { 
		font-family: sans-serif; 
	}
	
	</style> 
	
</head>

<body> 

<h1>Test Page</h1>

<?php

// going to try my hand at another switch statement

$name = "Palumbo"; 

switch ($name) {
	case "Joseph": 
		echo "Your first name is Joseph"; 
		break; 
	case "Henry": 
		echo "Your middle name is Henry"; 
		break; 
	case "Palumbo": 
		echo "You last name is Palumbo"; 
		break; 
}
?>

</body>
</html>
	