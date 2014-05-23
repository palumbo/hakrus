<!DOCTYPE HTML5>
<html> 

<head> 
<title>Integers</title> 
</head> 

<body> 

<h3>Basic Math</h3>

<p>
<code>$var1</code> is set to 3<br />
<code>$var2</code> is set to 4. 
</p>


<p>Here is the code: <code> echo ((1 + 2 + $var1) * $var2) / 2 - 5;</code></p>

<?php
$var1 = 3; 
$var2 = 4; 
?>

Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br /> 


<h3>Absolute Value</h3>

Absolutel Value: <?php echo abs(0 - 300); ?><br /> 

<h3>Exponential</h3>

Exponential: <?php echo pow(2, 8); ?><br /> 

<h3>Square Root</h3>

Square Root: <?php echo sqrt(100); ?><br /> 

<h3>Modulo</h3>

Modulo: <?php echo fmod(20, 7); ?><br /> 

<h3>Random</h3>

Random: <?php echo rand(); ?><br /> 
Random (min, max): <?php echo rand(1, 10); ?><br /> 

<h3>Incrementing and Decrementing</h3>

+=: <?php $var2 += 4; echo $var2; ?><br /> 
-=: <?php $var2 -= 4; echo $var2; ?><br /> 
*=: <?php $var2 *= 3; echo $var2; ?><br /> 
/=: <?php $var2 /= 4; echo $var2; ?><br /> 

<p>For when you need to increment by 1, which is very common</p>

<code>$var2<b>++</b>; echo $var2; </code>

<br /><br /> 

<?php echo 1 + "2 house"; ?>


</body> 
</html> 