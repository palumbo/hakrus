<?php 
	$link = mysqli_connect("localhost", "root", "foo.bar", "world"); 
	
	// check connection 
	if (mysqli_connect_errno()) { 
		printf("Connect failed: %s\n", mysqli_connect_error()); 
		exit(); 
	}
	
	if (!mysqli_query($link, "SET A=1")) { 
		printf("Errormessage: %s\n", mysqli_error($link)); 
	}
	
	// close connection 
	mysqli_close($link); 
?>