<!DOCTYPE HTML5>
<html> 

<head> 
	<title>Encoding GET Values</title>
	<link href="index.css" rel="stylesheet">  
</head> 

<body> 

	<h1>Encoding GET Values</h1>
	
	<p>
	<code>urlencode()</code>
	<ul>
		<li>Letters, numbers, underscore and dashes are unchanged</li>
		<li>Reserved characters become % + 2-digit hexidecimal</li>
		<li>Spaces become '+'</li>
	</ul>
	</p>
	
	<p>
	<code>rawurlencode()</code>
		<ul>
			<li>Letters, numbers, underscores and dashes are unchanged</li>
			<li>Reserved characters become % + 2-digit hexidecimal</li>
			<li>Spaces become %20</li>
		</ul>
	</p>
	
	<p> 
	<code>urlencode()</code> vs. <code>rawurlencode()</code>
		<ul>
			<li><code>rawurlencode()</code> the path</li>
				<ul>
					<li>Path is the part before the ?</li>
					<li>Spaces need to be encoded as %20</li>
				</ul>
			<li><code>urlencode()</code></li>
				<ul>
					<li>Query string is the part after the ?</li>
					<li>Spaces are better encoded as +</li>
				</ul>
			<li>However...<code>rawurlencode()</code> is generally more compatbile</li>
		</ul>



</body> 
</html> 