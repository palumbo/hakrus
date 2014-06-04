
	<?php 
		// since sessiosn use cookies
		// must start before any HTML output
		// unless output buffering is turned on
		session_start(); 
	?>
	
	<!DOCTYPE HTML5>
	<html> 
	
	<head> 
		<title>Sessions</title> 
	</head> 
	
	<body> 
	
		<?php 
			$_SESSION["first_name"] = "Joseph"; 
			$name = $_SESSION['first_name']; 
			echo $name; 
		?>
	
	
	
	</body> 
	</html> 