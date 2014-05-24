<!DOCTYPE HTML5>
<html> 

<head> 
<title>Test | Again</title> 
</head> 

<body> 

<!--
<?php 

// while loop
$count = 0; 

while ($count <= 10) { 
	echo $count . ", "; 
	$count++; 
}

?>

<br /> 

<?php 

for ($count = 0; $count <= 10; $count++) { 
	echo $count . ", "; 
}
?>

<br /> 

<!-- while loop with an if statement --> 

<!--
<?php

$count = 0; 

while ($count <= 10) { 
	if ($count == 5) { 
		echo "FIVE, "; 
	} else { 
		echo $count . ", "; 
	} $count++; 
}
?>
-->

<!--
<br /> 
foreach loop 

<?php 

$array = ["Joseph", "Henry", "Palumbo"]; 

foreach ($array as $i) { 
	echo $i . " "; 
}
?>
-->



<!-- foreach loop with an associative array --> 

<?php

$person = array(
	"first_name" => "Joseph", 
	"middle_name" => "Henry", 
	"last_name" => "Palumbo",
	"address" => "5703 Seacomber Pl", 
	"state" => "Texas", 
	"zipcode" => "78242"
); 

foreach ($person as $attribute => $data) { 
	$attr_nice = ucwords(str_replace("_", " ", $attribute)); 
	echo "<b>{$attr_nice}</b>: {$data}<br />"; 
}
?>

<br /> 

<?php // testing modulos

echo 2 % 7; 

?>

</body> 
</html> 