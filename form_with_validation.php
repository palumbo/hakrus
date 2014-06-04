	<?php 
		require_once("included_functions.php"); 
		require_once("validation_functions.php"); 
		
		$errors = array(); 
		$message = ""; // do I need to set this? 
		
		if (isset($_POST['submit'])) { 
			//form was submitted
			$username = trim($_POST['username']); 
			$password = trim($_POST['password']); 
		}		
		
		
		// validations
		if (!has_presence($username)) { 
			$errors["username"] = "Username can't be blank"; 
		}
		
		
		if (empty($errors)) { 
			//successful login
			redirect_to("index.php"); 
		} else { 
			$message = "Username/password do not match."; 
		}




		// try to login
		if ($username == "palumbo" && $password=="secret") { 
			//successful login
			redirect_to(index.php); 
		} else { 
			$message = "There were some errors."; 
		}
		
	?>		
		
		
	<?php form_errors($errors); ?>

<!DOCTYPE HTML5>
<html> 

<head> 
<title>Form</title> 
</head> 

<body> 

<?php echo $message . "<br />"; ?>

<form action="form_with_validation.php" method="post"> 
Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br /> 
Password: <input type="password" name="password" value="" /><br /> 
<br /> 
<input type="submit" name="submit" value="Submit" />
</form>


</body> 
</html> 
	
	</body> 
</html> 

