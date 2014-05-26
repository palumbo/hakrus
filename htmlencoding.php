<!DOCTYPE HTML5>
<html> 

<head> 
	<title>HTML Encoding</title>
	<link href="index.css" rel="stylesheet">  
</head> 

<body> 

<!--
	<?php 
	$linktext = "<Click> & Learn More"; 
	?>

<a href=""><?php echo htmlspecialchars($linktext); ?></a> 
-->

	<?php 
		$url_page = "php/created/page/url.php"; 
		$param1 = "This is a string wth < >"; 
		$param2 = "&#?*$[] are bad characters"; 
		$linktext = "<Click> & learn more"; 
		
		$url = "http://hakr.us/"; 
		$url .= rawurldecode($url_page); 
		$url .= "?" . "param1=" . urlencode($param1); 
		$url .= "&" . "param2=" . urlencode($param2); 
		echo htmlspecialchars($url) . "<br />"; 
	?>

	<a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($linktext); ?></a>


</body> 
</html> 