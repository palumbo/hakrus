<!DOCTYPE HTML5>
<html> 

<head> 
<title>String Functions</title> 
</head> 

<body> 

<?php

$first = "The quick brown fox"; 
$second = " jumped over the lazy dog."; 

$third = $first; 
$third .= $second; 

echo $third; 

?>

<br /> 

Lowercase: <?php echo strtolower($third); ?><br /> 
Uppercase: <?php echo strtoupper($third); ?><br /> 
Uppercase First: <?php echo ucfirst($third); ?><br /> 
Uppercase Words: <?php echo ucwords($third); ?><br />

<br /> 

Length: <?php echo strlen($third); ?><br />
Trim: <?php echo "A" . trim("       B C D ") . "E"; ?><br /> 
Find: <?php echo strstr($third, "brown"); ?><br /> 
Find "dog": <?php echo strstr($third, "dog"); ?><br /> 
Find "fox": <?php echo strstr($third, "fox"); ?><br /> 

<br /> 
<!-- This next function will find/replace a word within a string before outputting it to the browser -->
Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?>
<br /> 


<!-- This next function repeats the string for a specified number of times --> 
Repeat: <?php echo str_repeat($third, 2); ?><br /> <br /> 

Make substring: <?php echo substr($third, 5, 10); ?> <br /> <br /> 

<!-- creating a numerical variable for testing --> 
<?php 
$number = "1234567890"; 
echo substr($number, 2, 2);
$letters = "abcdef"; 
echo "<br />"; 
echo substr($letters, -1);  
?>

<h3>Find Position</h3>

<p>
<i>strpos</i> - Find the position of the first occurrence of a substring in a string. 
</p>

<p>
<code>echo strpos($third), "brown"); </code>
</p>

Find Position: <?php echo strpos($third, "brown"); ?>



<h3>Find Character</h3>

<p>
<i>strchr</i> - Alias of <i>strstr()</i>
</p>

<p>
<code>echo strchr($third, "z");</code>
</p>

Find Character: <?php echo strchr($third, "z"); ?><br /> 


</body> 
</html> 