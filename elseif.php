<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Else & Elseif</title> 
	<style type="text/css"> 
	
	body { 
		font-family: sans-serif; 
	}
	
	</style> 
</head> 

<body> 

<?php
$a = 5; 
$b = 4; 

if ($a > $b) {
	echo "A is greater than B"; 
} elseif ($a < $b) { 
	echo "B is greater than A"; 
} else { 
	echo "A and B are equal"; 
}


?>

<hr /> 

<?php
$mystring = "abc"; 
$needle = "b"; 
$pos = strpos($mystring, $needle); 

if ($pos === false) { 
	echo "The string $needle was not found in the string $mystring"; 
} else { 
	echo "The string {$needle} was found in the string {$mystring}"; 
	echo " and exists at the {$pos} position"; 
}
?>

<hr /> 

<h2>String Shuffle</h2>

<p> 
PHP has a function called <a href="http://us2.php.net/manual/en/function.str-shuffle.php">string shuffle</a> which shuffles a string. The code looks like this: <br /> 

<code>
$a = 'abcde'; <br /> 
$b = str_shuffle($a); <br /> 
</code>

<div id="shuffle"> 
<?php 
$string1 = "abcde"; 
$string2 = "The quick brown fox jumps over the lazy dog."; 

$shuffled = str_shuffle($string2); 
echo $shuffled
?>


</div>

</body> 
</html> 