<!DOCTYPE HTML5>
<html> 

<head> 
	<title>While Loops</title> 
	<style type="text/css"> 
	
		body { 
			font-family: sans-serif; 
			font-size: 90%; 
		}
		
		code { 
			font-family: monospace; 
			border: 1px solid; 
			background-color: lightgrey; 
			display: inline-block; 
			padding: 10px; 
		}
	
	</style> 
	
</head> 

<body> 

	<h1>While Loop</h1>
	
	<?php 
		
		$count = 0; 
		
		while ($count <= 10) { 
			echo $count . ", "; 
			$count++; 
		}
		
	?>
	
	<br /> 
	<hr /> 
	
	<h2>Basic while loop code</h2>
	
	<code> 
	$count = 0; <br /> 
	while ($count <= 10) { <br /> 
	&emsp; echo $count . ", "; <br /> 
	&emsp; $count++; // increment by 1 <br /> 
	}
	</code>
	
	<h2>A more advanced way</h2>
	
	
		<code> 
		$count = 0; <br /> 
		while ($count <= 10) { <br /> 
		&emsp;&emsp;if ($count == 5) { <br /> 
		&emsp;&emsp;echo "FIVE, "; <br /> 
		&emsp;} else { <br ?>
		&emsp;&emsp;echo $count . ", "; <br /> 
		&emsp;} $count++; <br /> 
		} <br /> 
		</code>
		
	<br /> <br /> 
	
	<h3>And this is what it outputs</h3>
	
		<?php 
		$count = 0; 
		
		while ($count <= 10) { 
			if ($count == 5) { 
				echo "FIVE, "; 
			} else { 
				echo $count . ", "; 
			}
			$count++; 
		}
		?>		
		
</body> 
</html> 