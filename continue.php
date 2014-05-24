<!DOCTYPE HTML5>
<html> 

<head> 
<title>Continue</title> 
</head> 

<body> 

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

<br />  <br /> 


<?php

for ($i=0; $i<=5; $i++) { 
	if ($i % 2 == 0) { continue; }
	for ($k=0; $k<=5; $k++) { 
		echo $i . "-" . $k . "<br />"; 
	}
}
?>

</body> 
</html> 