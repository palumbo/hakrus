<?php 

$link = mysqli_connect("localhost", "root", "foo.bar", "world"); 

// check connection 
if (mysqli_connect_errno()) { 
	die("Connect Failed " . mysql_connect_error()); 
}

$query = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 150,5"; 

if ($stmt = mysqli_prepare($link, $query)) { 
	
	// execute statement
	mysqli_stmt_execute($stmt); 
	
	// bind result variables
	mysqli_stmt_bind_result($stmt, $name, $code); 
	
	// fetch values
	while (mysqli_stmt_fetch($stmt)) { 
		printf ("%s (%s)\n", $name, $code); 
	}
	
	// close statement
	mysqli_stmt_close($stmt); 
	
}

// close connection 
mysqli_close($link); 
?>