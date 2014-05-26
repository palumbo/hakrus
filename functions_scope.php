<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Functions: Scope and Global Variables</title> 
	<link href="index.css" rel="stylesheet"> 
</head> 

<body> 

	<h1>Scope and Global Variables</h1>
	
	<p> 
	In PHP there are two main scopes: 
		<dl>
			<dt>Global Scope</dt>
			<dd></dd>
			<dt>Local Scope</dt>
			<dd></dd>
		</dl>
	</p>
	
	<div id="code"> 
		$bar = "outside"; // global scope <br /> 
		<br /> 
		function foo() { <br />  
		&emsp;	$bar = "inside"; // local scope <br /> 
		} <br /> 
	</div>

	<p> 
	In order to bring the global variable of <code>$bar</code> into your function, you will need to use 


</body> 
</html> 