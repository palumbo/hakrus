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

// Let's do some loops

$count = 0; 
while ($count <= 10) { 
	echo $count . ", "; 
	$count++; 
}
?>

<br /> 

<?php // for loop 

for ($count = 0; $count <= 10; $count++) {
	echo $count . ", "; 
}

?>

</body>
</html>
	