<!DOCTYPE HTML5>
<html> 

<head> 
<title>Second Page</title> 
</head> 

<body> 

	<a href="first_page.php">First Page</a>
	<br /> 
	

	<?php
		$id = $_GET['id']; 
		echo $id; 
	?>

	<br /> 

	<?php
		$company = $_GET['company']; 
		$id = $_GET['id']; 
		echo sprintf('The ID passed to the browser was %d.<br />', $id); 
		echo sprintf ('The company name is %s.<br /> ', $company);  
	?>


</body> 
</html> 