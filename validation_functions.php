
<?php 
	
	// a function to check for presence
	function has_presence($value) { 
		return isset($value) && $value !== ""; 		
	}
	
	// a function to check for string length
	// max length
	function has_max_length($value, $max) { 
		return strlen($value) <= $max; 
	}
	
	
	// a function to check for inclusion in a set
	function has_inclusion_in($value, $set) { 
		return in_array($value, $set); 
	}
	
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
		
<!--
		$validation = "x"; 
		if (!isset($validation) || empty($validation)) { 
			echo "Validation failed!"; 
		}
		
		// string length
		$value = "abcd"; 
		$min = 3; 
		if (strlen($value) < $min) { 
			echo "Validation failed.<br />"; 
		}
		$max = 6; 
		if (strlen($value) > $max) { 
			echo "Validation failed...too long<br />"; 
		}
		
		// * type
		$value = intval("1"); 
		if (!is_string($value)) {
			echo "Validation failed...wrong form type<br /.>"; 
		}	
		
		// * inclusion in a set
		$value = "1"; 
		$set = ["1", "2", "3", "4"]; 
		if (!in_array($value, $set)) { 
			echo "Validation Failed: Value Not Found<br />"; 
		} else { 
			echo "Validation worked!<br /> "; 
		}
		
				
		$email = "nobody@nowhere.com"; 
		if (preg_match("/@/", $email)) { 
			echo "Validation matches<br />"; 
		} else { 
			echo "Validation Does Not match<br />"; 
		}
-->
		
	
