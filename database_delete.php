
	<?php 
		$dbhost = "localhost"; 
		$dbuser = "widget_cms"; 
		$dbpass = "foo.bar"; 
		$dbname = "widget_corp"; 
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
		
		if (mysqli_connect_errno()) { die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"); }
	?>
	
	<?php 
		$id = 6;
	
		// 2. perform database query	
		$query  = "delete from subjects "; 
		$query .= "where id = {$id} "; 
		$query .= "limit 1"; 
				
		$result = mysqli_query($connection, $query); 
		
		// test if there was a query error
		if ($result && mysqli_affected_rows($connection) == 1) {
			// success
			// redirect_to("somepage.php")
			echo "Success!"; 
		} else {  
			die("Database query failed " . mysqli_error($connection)); 
		}
	?>
	
	<!DOCTYPE HTML5>
	<html> 
	
	<head> 
		<title>Databases</title> 
	</head> 
	
	<body> 
	
		
	</body> 
	</html> 
	
	<?php 
		mysqli_close($connection); 
	?>