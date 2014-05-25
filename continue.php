<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Continue</title> 
	<style type="text/css"> 
	
		body { 
			font-family: sans-serif; 
		}
		
		#code { 
			font-family: monospace; 
			background-color: lightgrey; 
			padding: 10px; 
			border: 1px solid; 
			display: inline-block; 
		}
	
	</style> 
</head> 

<body> 

<h1>Continue</h1>

<?php

// while loop with continue

$count = 0; 

while ($count <= 10) { 
	if ($count == 5) { 
		$count++; 
		continue; 
	}
	echo $count . ", "; 
	$count++; 
	}
?>

<h2>Here is what the code looks like...</h2>

<div id="code">
$count = 0; <br /> 
<br /> 
while ($count <= 10) { <br /> 
&emsp;if ($count == 5) { <br /> 
&emsp;&emsp;$count++; <br /> 
&emsp;&emsp;continue; <br /> 
&emsp;}<br /> 
&emsp;echo $count . ", "; <br /> 
}
</div>

<hr /> 

<br />  <br /> 


<?php

for ($i=0; $i<=5; $i++) { 
	if ($i % 2 == 0) { continue(1); }
	for ($k=0; $k<=5; $k++) { 
		if ($k==3) { continue(2); }
		echo $i . "-" . $k . "<br />"; 
	}
}
?>

<h2>Here is what the code looks like...</h2>

<div id="code"> 
	for ($i=0; $i<=5; $i++) { <br /> 
	&emsp;if ($i % 2 == 0) { continue(1); } <br /> 
	&emsp;for ($k=0; $k<=5; $k++) { <br />  
	&emsp;&emsp;if ($k == 3) { continue(2); } <br /> 
	&emsp;}<br /> 
	}
</div>

</body> 
</html> 