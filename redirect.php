<?php 

	function redirect($page) { 
		header("Location: {$page}"); 
		exit; 
	}
	
	$logged_in = $_GET['logged_in']; 
	
	if ($logged_in == 1) { 
		redirect("index.php"); 
	} else { 
		redirect("http://thinkgeek.com"); 
	}
	
?>


<!DOCTYPE HTML5>
<html> 

<head> 
<title>Redirect</title> 
</head> 

<body> 




</body> 
</html> 