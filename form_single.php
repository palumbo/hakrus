<?php 
	
	require_once("included_functions.php"); 
	if (isset($_POST['submit'])) { 
		// form was submitted
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		if ($username == "palumbo" && $password == "secret") { 
			// successful login	
			redirect_to("index.php"); 
		} else { 
		$username = $_POST['username']; 
		$message = "There were some errors"; 
		}
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$message = "There were some errors"; 
		} else { 
		$username = ""; 
		$message = "Please log in."; 
	}
?>

<!DOCTYPE HTML5>
<html> 

<head> 
<title>Form</title> 
</head> 

<body> 

<?php echo $message . "<br />"; ?>

<form action="form_single.php" method="post"> 
Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br /> 
Password: <input type="password" name="password" value="" /><br /> 
<br /> 
<input type="submit" name="submit" value="Submit" />
</form>


</body> 
</html> 