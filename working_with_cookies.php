<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Working with cookies</title>
	<link href="index.css" rel=stylesheet > 
</head> 

<body> 

	<h1>Working with Cookies and Sessions</h1>
	
	<h2>Setting Cookie Values</h2>
	
	<p>
	You set cookies using the <a href="http://us1.php.net/manual/en/function.setcookie.php"><code>setcookie()</code></a> function like this: 
	
	<div id="code"> 
	$name = "test";<br />  
	$value = 45; <br /> 
	$expire = time() + (60*60*24*7) // expires in one week <br /> 
	<br /> 
	setcookie($name, $value, $expire); 
	</div>
	</p>
	
	<p>
	You can then pull data from a cookie (which is just an associative array) using the <code>print_r()</code> function. 
	</p>
	
	<h2>Unsetting a cookie</h2>
	
		<p>You unset a cookie by re-setting it using <code>setcookie()</code>, but just using negative values, like this</p>
	
	<h2>Working with sessions</h2>
	
	
	

</body> 
</html> 