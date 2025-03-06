
<?php

$operators = array("+", "-", "*", "/");
$numbers = array(1, 2, 3, 4);

$result = $numbers[array_rand($numbers)] . " " . $operators[array_rand($operators)] . " " . $numbers[array_rand($numbers)];

echo $result;

?>