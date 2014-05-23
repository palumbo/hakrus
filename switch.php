<!DOCTYPE HTML5> 

<head> 
	<title>Switch</title>
	<style type="text/css"> 
	
		body { 
			font-family: sans-serif; 
			font-size: 90%; 
		}
		
		.code { 
			font-family: monospace; 
			background: lightgrey; 
			display: inline-block; 
			border: 1px solid; 
			padding: 10px; 
		}
		
	</style> 
	
</head>

<body> 

<h1>Switch Statements</h1>

<p> 
Here is what the code looks like:
</p>

<div class="code"> 
$a = 3; <br /> 
&emsp; case 0: <br /> 
&emsp; &emsp; echo "a is equal to 0"; <br /> 
&emsp; &emsp; break; <br /> 
&emsp; case 1: <br /> 
&emsp; &emsp; echo "a is equal to 1"; <br /> 
&emsp; &emsp; break; <br /> 
&emsp; case 2: <br /> 
&emsp; &emsp; echo "a is equal to 2"; <br /> 
&emsp; &emsp; break; <br /> 
&emsp; case 3: <br /> 
&emsp; &emsp; echo "a is equal to 3"; <br /> 
&emsp; &emsp; break;
</div>

<br /> <br /> 
<hr /> 
<?php 
$a = 1; 

switch ($a) { 
	case 0: 
		echo "a is equal to 0"; 
		break; 
	case 1: 
		echo "a is equal to 1"; 
		break; 
	case 2: 
		echo "a is equal to 2"; 
		break; 
	case 3: 
		echo "a is equal to 3"; 
		break; 
}
?>

</body>
</html> 