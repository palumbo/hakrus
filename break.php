<!DOCTYPE HTML5>
<html> 

<head> 	
	<title>Break</title> 
	<link href="index.css" rel="stylesheet">

</head> 

<body> 

<h1>Break</h1>

<?php
for ($i=0; $i<=10; $i++) { 
	if ($i == 5) { 
		break; 
	}
	echo $i . ", "; 
}
?>

<h2>Here's the code</h2>

<div id="code">
for ($i=0; $i<=10; $i++) { <br /> 
&emsp;if ($i == 5) { <br /> 
&emsp;&emsp;break; <br /> 
&emsp;} <br /> 
&emsp;echo $i. ", "; <br /> 
}
</div>

</body> 
</html> 