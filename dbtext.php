<?php
$con = mysql_connect("localhost", "root", "foo.bar"); 
if (!$con)
{
	die('Could not connect: '.mysql_error()); 
}
else
{
	echo "Congrats! connection established successfully"; 
}
mysql_close($con); 
?>
