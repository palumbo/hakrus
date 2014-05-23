<!DOCTYPE HTML5>
<html> 

<head> 
	<title>foreach loops</title> 
	<style type="text/css"> 
	
		body { 
			font-family: sans-serif; 
			font-size: 90%; 
		}
		
		#code { 
			font-family: monospace; 
			background-color: lightgrey; 
			border: 1px solid; 
			padding: 10px;  
			display: inline-block; 
		}
	</style> 
	
</head> 

<body> 

	<h1>Foreach Loops</h1>
	
		<?php
		
			$ages = array(4,8,15,16,23,42); 
			
			foreach($ages as $age) { 
				echo "Age: {$age}<br />"; 
			}
		
		?>
		
		<hr /> 
		
		<h2>Here's what the code looked like...</h2>
		
		<div id="code"> 
		<p>
		$ages = array(4,8,15,16,23,42); <br /> <br /> 
		foreach($ages as $age) { <br /> 
		&emsp; echo "Age: {$age}"; <br />  
		}<br /> 
		</p>
		</div>
</body>		



</body> 
</html> 