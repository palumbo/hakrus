<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Functions: Arguments</title> 
	<link href="index.css" rel="stylesheet"> 
</head> 

<body> 

	<?php
	
		function say_hello_to($word) { 
			echo "Hello {$word}"; 
		}
		
	?>
	
	<hr /> 
	
	<?php // returning values 1
	
		function add($val1, $val2) { 
			$sum = $val1 + $val2; 
			return $sum; 
		}
		
		$result1 = add(3, 4); 
		$result2 = add(5, $result1); 
		echo $result2; 
	?>
	
	<br />  
	
	<?php
		
		function chinese_zodia($year) { 
			switch (($year - 4) % 12) {
				case 0: return "Rat"; 
				case 1: return "Ox"; 
				case 2: return "Tiger"; 
				case 3: return "Rabbit"; 
				case 4: return "Dragon"; 
				case 5: return "Snake"; 
				case 6: return "Horse"; 
				case 7: return "Goat"; 
				case 8: return "Monkey"; 
				case 9: return "Rooster"; 
				case 10: return "Dog"; 
				case 11: return "Pig"; 
			}
		}
		
		$my_sign = chinese_zodia(1976); 
		echo $my_sign; 
	?>
	
	<br /> 
	<p>
	Functions can only return a single value
	</p>
	
	<?php 
		function add_subt($val1, $val2) { 
			$add = $val1 + $val2; 
			$subt = $val1 - $val2; 
			return array($add, $subt); 
		}
		
		$result_array = add_subt(10, 5); 
		echo "Add: " . $result_array[0] . "<br />"; 
		echo "Subt: " . $result_array[1] . "<br />"; 
	?>
	
	<?php // the same thing, but using lists
	
		list($add_result, $subt_result) = add_subt(20, 7); 
		echo "Add: " . $add_result . "<br />"; 
		echo "Subt: " . $subt_result . "<br />"; 
	?>
	
	<h2>Here's what the code looks like</h2>
	
	<p><a href="http://us2.php.net/manual/en/function.list.php"><code>list()</code></a> will assign variables as if they were in an array. So when you have a PHP function that returns multiple values in an array, you can use the <code>list()</code> function to clean up the results.</p>
	
	<p>Let's look at the results. Here is where I define the function. </p>
	
	<div id="code">
	function add_subt($val1, $val2) { <br /> 
	&emsp;	$add = $val1 + $val2; <br /> 
	&emsp; 	$subt = $val2 - $val2; <br /> 
	&emsp;	return array($add, $subt); <br /> 
	} <br /> 
	</div>
	
	<p>Using normal array syntax, here's how we call the results.</p>
	
	<div id="code"> 
	$result_array = add_subt(10,5); <br /> 
	echo "Add: " . $result_array[0]; <br /> 
	echo "Subt: " . $result_array[1]; <br /> 
	</div>
	
	<p>Here's what it looks like if we use the list function</p>
	
	<div id="code">
	list($add_result, $subt_result) = add_subt(20,7); <br /> 
	echo "Add: " . $add_result; <br /> 
	echo "Subt: " . $subt_result; <br /> 
	</div>
	 

</body> 
</html> 