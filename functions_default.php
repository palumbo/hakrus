<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Functions: Default Argument Values</title> 
	<link href="index.css" rel="stylesheet"> 
</head> 

<body> 

	<h1>Functions: Default Argument Values</h1>
	
	<p>You can set default values of arguments, but still allow users to change them. </p>
	
	<div id="code"> 
	function paint($room="office", $color="red")<br /> 
	&emsp;	{ <br /> 
	&emsp;	return "The color of the {$room} is {$color}."; <br />  
	&emsp;	}<br /> 
	<br /> 		
	&emsp;	echo paint();<br />  
	&emsp;	echo paint("bedroom", "blue"); <br /> 
	</div>
	<br /> 
	<br /> 
	<h2>Here's the output</h2>
		
	<?php
	
		function paint($room="office", $color="red") 
		{
			return "The color of the {$room} is {$color}.<br />"; 
		}
		
		echo paint(); 
		echo paint("bedroom", "blue"); 
		
	?>



</body> 
</html> 