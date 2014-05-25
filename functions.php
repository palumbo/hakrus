<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Defining Functions</title> 
	<link href="index.css" rel="stylesheet"> 
</head> 

<body> 

	<h1>Defining Functions</h1>
	
	<h2>The basic syntax</h2>
	
	<div id="code"> 
	function name($arg1, $arg2) { <br /> 
	&emsp;  statement; <br /> 
	}<br /> 
	</div>

	<br /><br /> 

	<?php
	
	function say_hello() {
		echo "Hello World<br />"; 
		}
		
	say_hello(); 
	?>
	
	<?php
	
		function say_hello_to($word) { 
			echo "Hello {$word}!<br />"; 
		}
		
		say_hello_to("Joseph"); 
	?>

</body> 
</html> 