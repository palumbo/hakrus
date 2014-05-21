<!DOCTYPE HTML5>
<html> 

<head> 
<title>Associative Arrays</title> 
</head> 

<body> 

<h1>Associative Arrays</h1>

<dl>
	<dt>Associative Arrays</dt>
		<dd>An object-indexed collection of objects</dd>
		<dd>Use when having a reference label is most important</dd>
</dl>

<hr />

<?php
// create an associative array
$assoc = ["first_name" => "Joseph", "mid_name" => "Henry", "last_name" => "Palumbo"]; 

echo $assoc["first_name"] . " " . $assoc["last_name"] . "<br />"; 


// changign the value of "first_name"
$assoc["first_name"] = "Joe"; 

// adding a new key/value pair? 
$assoc["nic_name"] = "bear"; 

echo $assoc["first_name"] . " " . $assoc["last_name"] . "<br />"; 
?>

<pre><?php echo print_r($assoc); ?></pre>



</body> 
</html> 