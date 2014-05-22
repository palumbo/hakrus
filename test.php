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

<?php // Trying a more advanced while loop

$count = 0; 

while ($count <= 10) { 
	if ($count == 5) { 
		echo "FIVE, "; 
	} else { 
		echo $count . ", "; 
	} $count++; 
}

?>
</body>
</html>
	