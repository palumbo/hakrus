<!DOCTYPE HTML5>
<html> 

<head> 
	<title>urlencode</title>
	<link href="index.css" rel="stylesheet"> 
</head> 

<body> 

	<?php 
		$page = "William Shakespeare"; 
		$quote = "To be or not to be"; 
		$link1 = "/bio/" . rawurldecode($page) . "?quote=" . urlencode($quote); 
		
		echo $link1; 
	?>



</body> 
</html> 