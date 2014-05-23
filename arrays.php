<!DOCTYPE HTML5>
<html> 

<head> 
<title>Arrays</title> 
</head> 

<body> 

<h1>Arrays</h1>

<h2>What is an array</h2>

<ul>
<li>An ordered, integer-indexed collection of objects</li>
</ul>

<?php
$numbers = array(4, 8, 15, 16, 23, 42); 
echo $numbers[0]; 
?>

<?php  $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?><br />

<?php echo $mixed[2]; ?><br /> 


<?php echo $mixed[3][1]; ?><br /> 

<?php $mixed[2] = "cat"; ?>
<?php $mixed[4] = "mouse"; ?>
<?php $mixed[] = "horse"; ?>

<pre><?php echo var_export($mixed); ?></pre>


<!-- NEWER WAY TO MAKE AN ARRAY --> 

<?php
$name = ["Joseph", "Henry", "Palumbo"]; 
echo $name[0] . " " . $name[2]; 
?>

<!-- BEGINNING OF NOTES SECTION --> 

<hr /> 
<h3>Notes</h3>

<p>
<code>var_dump</code> vs. <code>print_r</code> vs. <code>var_export</code>
</p>

<dl>
	<dt><b>var_dump</b></dt>
		<dd>for debugging purposes; provides member's type</dd>
	<dt><b>print_r</b></dt>
		<dd>is for debugging purposes too, but does not include the member's type. It's a good idea to use if you know the types of elements in your array, but can be misleading otherwise.</dd>
	<dt><b>var_export</b></dt>
		<dd>print's <u>valid PHP code</u>. Useful if you calculated some values and want the results as a constant in another script.</dd>
		<dd>NOTE: Cannot handle reference cycles or recursive arrays whereas <code>var_dump</code> and <code>print_r</code>	check for these.</dd>
</dl>

<p>
Source: <a href="http://stackoverflow.com/questions/5039431/difference-between-var-dump-var-export-print-r">Stack Overflow</a>
</p>

</body> 
</html> 