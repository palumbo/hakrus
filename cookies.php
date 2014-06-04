	<?php 
		// let's set a cookie value
		$name = "test";  
		$value = "hello"; 
		$expire = time() + (60*60*24*7); 
		
		// setcookie($name, $value, $expire); 
		setcookie($name, null, time() - 3600); 
	?>

<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Cookies</title> 
</head> 

<body> 

	<?php
	$test = isset($_COOKIE['test']) ? $_COOKIE['test'] : ""; 
	echo $test; 
	?>



</body> 
</html> 