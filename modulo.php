<!DOCTYPE HTML5>
<html> 

<head> 
<title>modulo</title> 
</head> 

<body> 

<?php

for ($i = 0; $i <= 100; $i++) { 
	if ($i % 2 != 0) { 
		continue; 
	}
	echo $i . ", "; 
	} 


?>



</body> 
</html> 