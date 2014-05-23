<html> 

<head> 
	<title>Strings</title> 
</head> 

<body> 

	<?php
	echo "Hello World<br />"; 
	echo 'Hello World<br />'; 

	$greeting = "Hello"; 
	$target = "World"; 
	$phrase = $greeting . " " . $target; 

	?>

	<br /> 

	<?php
	echo "$phrase Again<br />"; 
	echo "{$phrase}Again<br />";
	?>

</body>
</html> 