<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Validation Error Handling</title> 
	<link href="index.css" rel="stylesheet> 
</head> 

<body> 

	<?php 
		// create array errors()
		$errors = array(); 
		
		// presence
		$validation = "a"; 
		if (!isset($validation) || empty($validation)) { 
			$errors['value'] = "Value can't be blank"; 
		}
		
		// string length
		$string = "abcd"; 
		$min = 3; 
		if (strlen($string) < $min) { 
			$errors['too_short'] = "Your string is too short."; 
		}
		$max = 6; 
		if (strlen($string) > $max) { 
			$errors['too_long'] = "Your string is too long"; 
		}
	
		// type
		$value = intval("1");
		if (!is_string($value)) { 
			$errors['type'] = "This value needs to be a number, please."; 
		} 
		
		// inclusion in a set
		$value = '5'; 
		$set = array("1", "2", "3", "4"); 
		if (!in_array($value, $set)) { 
			$errors['set'] = "The value is not in the set."; 
		}
		
		// email
		$email = "jhpalumbo@gmail.com"; 
		if (preg_match("/@/", $email)) {
			$errors['email'] = "Please verify your email address."; 	 
		}
	?>
	
	<?php 
		// creating form_errors function
		function form_errors($errors=array()) { 
			$output = ""; 
			if (!empty($errors)) { 
				$output .= "<div class=\"errors\">"; 
				$output .= "Please fix the following errors: "; 
				$output .= "<ul>"; 
				foreach ($errors as $key => $error) { 
					$output .= "<li>{$error}</li>"; 
				}
				$output .= "</ul>"; 
				$output .= "</div>"; 
			}
			return $output; 
		}
	?>
	
	<?php echo form_errors($errors); ?>


</body> 
</html> 

