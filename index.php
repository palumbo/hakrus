<!DOCTYPE HTML5>
<html> 

<head> 
	<title>hakr.us</title> 
	
	<style type="text/css"> 
	

		body {
				font-family: Arial, Verdana, sans-serif;
				padding: 50px;
				}
			
			/* links */
			a:link {
				color: black;
				text-decoration: none;	
			}
			
			a:visited {
				color: black;
			}
			
			a:hover {
				color: grey;
			}
			
			.header {
				font-family: serif;
				text-align: right;  
				/* float: right; */
				color: grey;
				font-size: 180%;  
			}
			
			#tip { 
				border: 1px dashed; 
				margin-bottom: 15px;
				padding: 0px 0px 0px 20px;   
			}
	</style>
	 
</head> 

<body> 

<span class="header"><h1>hakr.us</h1></span>

<h2>Exploring Data Types</h2>
	<ul>
		<li><a href="variables.php">Variables</a></li>
		<li><a href="strings.php">Strings</a></li>
		<li><a href="string_functions.php">String Functions</a></li>
		<li><a href="integers.php">Numbers Part One: Integers</a></li>
		<li><a href="floats.php">Numbers Part Two: Floating Points</a></li>
		<li><a href="arrays.php">Arrays</a></li>
		<li><a href="assoc_arrays.php">Associative Arrays</a></li>
		<li><a href="constants.php">Constants</a></li>
	</ul>

<h2>Control Structures: Logical Expressions</h2>
	<ul>
		<li><a href="logical.php">If Statements</a></li>
		<li><a href="elise.php">Else and elseif statements</a></li>
		<li><a href="comparison.php">Logical Operators</a></li>
		<li><a href="switch.php">Switch Statements</a></li>
	</ul> 



<h2>Control Structures: Loops</h2>
	<ul> 
		<li><a href="whileloops.php">While Loops</a></li>
		<li><a href="forloops.php">For Loops</a></li>
		<li><a href="foreachloops.php">Foreach Loops</a></li>
		<li><a href="continue.php">Continue</a></li>
		<li><a href="break.php">Break</a></li>
		<li><a href="pointers.php">Understanding Array Pointers</a></li>
	</ul>


<h2>User-Defined Functions</h2>
	<ul>
		<li><a href="functions.php">Defining Functions</a></li>
		<li><a href="function_arguments.php">Function Arguments & Returning Values</a></li>
		<li><a href="functions_scope.php">Scope and Global Variables</a></li>
	</ul>
	
<h2>Building Web Pages with PHP</h2>
	<ul>
		<li><a href="get_encoding.php">Encoding GET Values</a></li>
		<li><a href="htmlencoding.php">Encoding for HTML</a></li>
	</ul>

<h2>Side Projects & Pages</h2>
	<ul>
		<li><a href="die.php">Gaming Die Simulator</a></li>
		<li><a href="test.php">Test Page</a></li>
	</ul>


<h2>Quick Tips</h2>

<div id="tip"> 
<p>
You can add "tabs" to HTML by using emsp;
</p>
</div>

<div id="tip"> 
<p>
Display error reporting in a PHP script without changing values in php.ini: 
	<ul>
		<li>ini_set('display_errors', 'On'); </li>
		<li>error_reporting(E_ALL); </li>
	</ul>
</p>
</div>	

<div id="tip"> 
	<p>
	Useful debugging tools: 
	<dl> 
		<dt><code>print_r</code></dt>
			<dd>Print readable array</dd>
		<dt><code>gettype($variable);</code>
			<dd>prints variable type</dd>
		<dt><code>var_dump($variable);</code></dt>
			<dd>varable type and value</dd>
		<dt><code>get_defined_vars();</code></dt>
			<dd>Is an array of all defined variables known in PHP</dd>
		<dt><code>debug_backtrace</code></dt>
			<dd>Will give you an array of all the function calls</dd>
	</dl>
	</p>
</div>
	
</body> 
</html> 
