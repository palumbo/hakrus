<!DOCTYPE HTML5>
<html> 

<head> 
<title>Logical</title> 
</head> 

<body> 

<?php
$a = "b"; 
$b = "a"; 

if ($a > $b) {
	echo "a is greater than b"; 
}
?>

<br /> 

<?php // only welcome new users
$new_user = true; 
if ($new_user) { 
	echo "<h1>Welcome</h1>"; 
	echo "<p>We are glad you decided to join us.</p>";
}
?>

<br /> 

<?php 
// don't divide by zero 
$numerator = 20; 
$denominator = 0; 

if ($denominator > 0) { 
	$result = $numerator / $denominator; 
	echo "Result: {$result}"; 
} else {
	echo "You cannot divide by zero"; 
}
?>

</body> 
</html> 