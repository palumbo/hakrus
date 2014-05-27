
<pre> 
<?php 
	print_r($_POST); 
?>
</pre>

<?php 
	if (isset($_POST['submit'])) { 
		echo "Form was submitted"; 
	}

	// set default value using ternary operators 
	// boolean test ? value_if_true : value_if_false
	$username = isset($_POST['username']) ? $_POST['username'] : "Bob"; 
	$password = isset($_POST['password']) ? $_POST['password'] : ""; 
	

	?>
	
	<?php 
		echo "{$username}:{$password}"; 
	?>