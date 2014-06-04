
	<?php 
		$dbhost = "localhost"; 
		$dbuser = "widget_cms"; 
		$dbpass = "foo.bar"; 
		$dbname = "widget_corp"; 
		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
		
		if (mysqli_connect_errno()) { die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"); }
	?>
	
	<?php 
		// 2. perform the database query
		$query  = "select * ";
		$query .= "from subjects ";  
		$query .= "where visible = 1 "; 
		$query .= "order by position asc "; 
		
		$result = mysqli_query($connection, $query); 
		
		// test if there was a query error
		if (!$result) { 
			die("Database query failed"); 
		}
	?>
	
	<!DOCTYPE HTML5>
	<html> 
	
	<head> 
		<title>Databases</title> 
	</head> 
	
	<body> 
	
	
	<!-- outputs the mysql table data in an unordered list --> 
	<ul>
	<?php while ($row = mysqli_fetch_assoc($result)) { ?>
	<li><?php echo $row["menu_name"]; ?></li>
	<?php
	}
	?>
	</ul>	
	
	
	
		<?php 
			// 4. release the returned data
			mysqli_free_result($result); 
		?>
	
	</body> 
	</html> 
	
	<?php 
		mysqli_close($connection); 
	?>