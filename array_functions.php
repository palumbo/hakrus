<!DOCTYPE HTML5>
<html> 

<head> 
<title>Array Functions</title> 
</head> 

<body> 

<?php
// create an array
$numbers = array(8, 23, 15, 42, 16, 4); 
$words = ["Joseph", "Henry", "Palumbo", "Avery"]; 
$assoc = ["first" => "Joseph", "middle" => "Henry", "last" => "Palumbo"];
?>

Count ($numbers): <?php echo count($numbers); ?><br /> 
Max Value ($numbers): <?php echo max($numbers); ?><br /> 
Min Value ($numbers): <?php echo min($numbers); ?><br /> 

<br /> <br /> 

Count ($words): <?php echo count($words); ?><br /> 
Max Value ($words): <?php echo max($words); ?><br /> 
Min Value ($words): <?php echo min($words); ?><br /> 

<br /> <br /> 

Count ($asso): <?php echo count($assoc); ?><br /> 
Max Value ($assoc): <?php echo max($assoc); ?><br /> 
Min Value ($assoc): <?php echo min($assoc); ?><br /> 

<br /> <br /> 
<h3>Sorting $numbers</h3>
<pre> 
Sort ($numbers): <?php sort($numbers); print_r($numbers); ?><br /> 
Reverse Sort ($numbers): <?php rsort($numbers); print_r($numbers); ?><br /> 
</pre>


<h3>Sorting $words</h3>

<pre> 
Sort: <?php sort($words); print_r($words); ?>
Reverse Sort: <?php rsort($words); print_r($words); ?>
</pre>

<h3>Sorting $assoc</h3>

<pre> 
Sort: <?php sort($assoc); print_r($assoc); ?>
Reverse Sort: <?php rsort($assoc); print_r($assoc); ?>
</pre>

<?php echo $num_string = implode(" * ", $numbers); ?><br /> 
<?php print_r(explode(" * ", $num_string)); ?><br />


<?php
// create a string
$string = "Four score and seven years ago. And then that thing happened."; 
$array = explode(" ", $string); 
?>

<pre><?php print_r($array); ?></pre>


</body> 
</html> 