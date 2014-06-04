<!DOCTYPE HTML5>
<html> 

<head> 
<title>Form Processing</title> 
</head> 

<body> 

	<pre> 
	<?php 
		print_r($_POST); 
	?>
	
	<?php 
		
		if (isset($_POST['submit'])) { 
			echo "Form was submitted"; 
			$username = isset($_POST['username']) ? $_POST['username'] : ""; 
			$password = isset($_POST['password']) ? $_POST['password'] : ""; 
		} else { 
			$username = ""; 
			$password = ""; 
		}		
	?>
	
	
			
	<?php echo "{$username}:{$password}"; ?>
	</pre>	

</body> 
</html> 