<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Comparison and Logical Operators</title>
	<style type="text/css" media="screen"> 
	
		body { 
			font-family: sans-serif; 
			font-size: 90%; 
		}
		
		.code { 
			font-family: monospace; 
			background: lightgrey; 
			display: inline-block; 
			padding: 5px; 
			border: 1px solid; 
		}
	
	</style> 
</head> 

<body> 

<h1>Logical Operators</h1>

<?php 

$a = 4; 
$b = 3; 
$c = 20; 
$d = 0; 

if (($a > $b) || ($c < $d)) {
	echo "a is greater than b and <br />"; 
	echo "c is less than d"; 
}
?>

<br /> 

<?php 
// setting the value of $e
$e = false; 

if (!isset($e)) { 
	$e = 200; 
} 

echo $e; 
?>

<br /> 

<!-- playing with empty --> 

<h2>Empty</h2>

<p>
You need to be careful when using the <a href="http://us3.php.net/manual/en/function.empty.php"><code>empty()</code></a> function. Here is some code to make sure that it doesn't count 0 or 0.0 as an empty variable. 
</p>

<div class="code"> 
<p> 
$quantity = ""; <br /> 
&emsp;&emsp;if (empty($quantity) && !is_numeric($quanity)) { <br /> 
&emsp;&emsp;echo "You must enter a quantity."; <br /> 
}
</p>
</div>

<hr /> 


<?php
	// don't reject 0 or 0.0
	$quantity = ""; 
	if (empty($quanitity) && !is_numeric($quantity)) { 
		echo "You must enter a quantity."; 
	}
?>

</body> 
</html> 