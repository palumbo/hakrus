
	<!DOCTYPE HTML5>
	<html> 
	
	<head> 
		<title>Validatons</title> 
	</head> 
	
	<body> 
	
		<?php 
		
		$errors = array(); 
		
		// * presence
		$value = ""; 
		if (!isset($value) || empty($value)) { 
			$errors['value'] = "Value can't be blank";  
		}
	
		// * string length
		$value = "ab"; 
		$min = 3; 
		if (strlen($value) < $min) { 
			$errors['min'] = "String length too short"; 
		}
		
		$max = 6; 
		if (strlen($value) > $max) { 
			$errors['max'] = "String length too long";  
		}
	
		// * type
		$value = 1; 
		if (!is_string($value)) { 
			$errors['type'] = "Type is incorrect"; 
		}
	
		// * includsion in a set
		$array = array("1", "2", "3", "4"); 
		$value = "5"; 
		if (!in_array($value, $array)) { 
			$errors['inclusion'] = "Item not found in array"; 
		}
	
		// * uniqueness
		// used with a database
		
		// * format
	
		?>
		
		<?php
		
		function form_errors($errors=array()) { 
			$output = ""; 
			if (!empty($errors)) { 
				$output .= "<div class=\"error\">"; 
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
		
		<?php 
		echo form_errors($errors); 
		?>
	
	</body> 
	</html> 