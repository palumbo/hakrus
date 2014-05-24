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
		<br />  
		
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
		
		<br />  
		<hr /> 
		
		<h2>Basic syntax for associative arrays</h2>
		
		<div id="code">
		<p> 
		foreach ($array as $key => $value) { <br /> 
		&emsp;statement; <br />  
		}
		</p>
		</div>
		
		<h2>Here's an example</h2>
		
		<?php
		
		$person = array(
			"first_name" => "Joseph", 
			"last_name" => "Palumbo", 
			"address" => "5703 Seacomber Pl", 
			"city" => "San Antonio", 
			"state" => "TX", 
			"zip_code" => "78242"
			); 
			
		foreach ($person as $attribute => $data) { 
			$attr_nice = ucwords(str_replace("_", " ", $attribute)); 
			echo "{$attr_nice}: {$data}<br />";   
		}
		?>
		
		<br /> 
	
		<div id="code"> 
			<p> 
			$person = array( <br /> 
			&emsp;"first_name" => "Joseph", <br /> 
			&emsp;"last_name" => "Palumbo", <br /> 
			&emsp;"address" => "5703 Seacomber Place", <br /> 
			&emsp;"city" => "San Antonio", <br />  
			&emsp;"state" => "TX", <br /> 
			&emsp;"zip_code" => "78242", <br /> 
			); <br /> 
			<br /> 
			foreach($person as $attribute => $data) { <br /> 
			&emsp;$attr_nice = ucwords(str_replace("_", " ", $attribute)); <br /> 
			&emsp;echo "{$attr_nice"}: {$data}; <br /> 
			}<br /> 
			</p>
		</div>
		
		</div>
	
</body>		


</body> 
</html> 