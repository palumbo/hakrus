<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Debuggin</title>
	<link href="index.css" rel="stylesheet">  
</head> 

<body> 

<h1>Debugging</h1>

	<?php 
		$number = 99; 
		$string = "Bug?"; 
		$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services"); 
		
		var_dump($number); 
		echo "<br />"; 
		var_dump($string);
		echo "<br />"; 
		var_dump($array);  
	
	?>
	
	<pre><?php var_dump($array); ?>
	
<!--
	<pre>
	<?php
	print_r(get_defined_vars()); 
	?>
	</pre>
-->

	<?php
	
		function say_hello($name){ 
			echo "Hello {$name}";
		}
	
		say_hello("Palumbo"); 

		echo "<br />"; 
	
		var_dump(debug_backtrace());
		
	?>


</body> 
</html> 