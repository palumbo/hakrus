<!DOCTYPE HTML5>
<html> 

<head> 
<title>Hello</title> 
</head> 

<body> 

<pre>
<?php print_r(headers_list()); ?>
</pre>


<?php 
	$name = $_GET['name']; 
	echo "Hello {$name}, it's nice to meet you"; 
?>


</body> 
</html> 