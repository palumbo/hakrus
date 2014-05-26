
<pre> 
<?php 
	print_r($_POST); 
?>
</pre>


<?php 

	if (isset($_POST['username'])) { 
		$username = $_POST['username']; 
	} else { 
		$username = ""; 
	}
	if (isset($_POST['password'])) { 
		$password = $_POST['password']; 
	} else { 
		$password = ''; 
	}

	echo "{$username}: {$password}"; 

	// echo sprintf('The username is %s and the password is %s', $username, $password); 
?>

