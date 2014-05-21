<!DOCTYPE HTML5>
<html> 

<head> 
	<title>For Loops</title> 
	<style type="text/css"> 
	
		body { 
			font-family: sans-serif; 
			font-size: 90%; 
		}
		
		#code { 
			font-family: monospace; 
			background-color: lightgrey;
			border: 1px solid; 
			padding: 8px; 
			display: inline-block; 
		}
	
	</style> 
</head> 

<body> 
<br /> 

	<?php // while loop
		$count = 0; 
		while ($count <= 10) { 
			echo $count . ", "; 
			$count++; 
		}
	?>
	
	<h3>Here's the code for the while loop</h3>
	
	<div id="code">
	<p>
	$count = 0; <br /> 
	while ($count <= 10) { <br /> 
	&emsp; echo $count . ", "; 
	&emsp; $count++; <br /> 
	}
	</p>
	</div>
	
	<br /> <br />
	<hr /> 
	<br /> <br /> 
	
	<?php // for loop
		for ($count = 0; $count <= 10; $count++) { 
			echo $count . ", "; 
		}
	?>

	<h3>And here's the code for the for loop</h3>
	
	<div id="code"> 
	<p> 
	for ($count = 0; $count <= 10; $count++) { <br /> 
	&emsp; &emsp; echo $count . ", "; <br /> 
	}
	</p>
	</div>

</body> 



</body> 
</html> 