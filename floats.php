<!DOCTYPE HTML5>
<html> 

<head> 
<title>Floating Point Numbers</title> 
</head> 

<body> 

<h1>Floating Point Numbers</h1>

<p>
Here are some examples of floating point numbers. 
</p>

<p>
<code>echo $float = 3.14;</code>
</p>

<?php echo $float = 3.14; ?><br /> 
<?php echo $float + 7; ?><br /> 
<?php echo 4/3; ?><br /> 

<h2>Rounding Floats</h2>

<h3>Round</h3>
<p>Returns the rounded value of val to specified precision (number of digits after the decimal point). precision can also be negative or zero (default).</p>

<p><code>echo round($float, 1); ?></code></p>

<h3>Ceiling</h3>

<p>Returns the next highest integer value by rounding the float up</p>

<p>The code looks like this - <code>php echo ceil($float); </code></p>

Round:  <?php echo round($float, 1); ?><br /> 
Ceiling: <?php echo ceil($float); ?><br /> 
Floor: <?php echo floor($float); ?><br /> 

<hr /> 

<h2>Determining if a number is an integer or float</h2>

<p>You can use the <code>is_int</code> function to determine if a number or variable is an integer or not. In this next example I'm using a variable $integer set to 3</p>

<code>echo "Is {$integer} integer? " . is_int($integer); </code>

<?php $integer = 3; ?>

<?php echo "Is {$integer} integer? " . is_int($integer); ?><br /> 
<?php echo "Is {$float} integer? " . is_int($float); ?><br /?> 

</body> 
</html> 