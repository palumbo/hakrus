<?php 

	function roll_die($min, $max) { 
		$i = rand(intval($min), intval($max)); 
		return $i; 
	}
?>

<?php

 
	$min = 1; 
	$max = 100; 
	roll_die($min, $max); 
	echo $i; 

?>
