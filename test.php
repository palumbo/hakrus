<?php 
	// 1. make the connection 
	$dbhost = "localhost"; 
	$dbname = "widget_corp"; 
	$dbuser = "widget_cms"; 
	$dbpass = "foo.bar"; 
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

	if (mysqli_connect_errno()) { 
		die("Database Connection Failed" . mysqli_connect_error()); 
	}
?>

<?php 
	// 2. perform the query
	$query = "select * "; 
	$query .= "from subjects "; 
	$query .= "where visible = 1 ";
	$query .= "order by position asc "; 

	$result = mysqli_query($connection, $query); 

	// test if query succeeded or failed
	if (!$result) { 
		die("Database query fialed"); 
	} 
?>

<html> 

<head>
		<title>Database Connection Test</title> 
</head> 

<body> 

	<pre> 
	<?php 
		// 3. user returned data
		while ($row = mysqli_fetch_assoc($result)) { 
			echo var_dump($row); 
			echo "<br />"; 
		}
	?>
	</pre>
	
	<?php
		// 4. release the returned data
		mysqli_free_result($result); 
	?>

</body> 
</html> 

<?php 
	// 5. close the connection 
	mysqli_close($connection); 
?>

