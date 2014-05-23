<!DOCTYPE HTML5>
<html> 

<head> 
<title>Constants</title> 
</head> 

<body> 

<?php 

$max_width = 980; 

define("MAX_WIDTH", 980); 

?>

<h1>Defining Constants</h1>

<p> 
You can define a constant using the <a href="http://us3.php.net/manual/en/function.define.php"><code>define()</code></a> function in PHP. It looks like this: <br /> <br /> 

<code>define("MAX_WIDTH", 980);</code>
</p>

<p> 
Once a constant is defined, it cannot be redefined until the end of the server/response cycle. 
</p>

</body> 
</html> 