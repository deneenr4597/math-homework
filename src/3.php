<?php

// Get an array of numbers between 1 and 10
$numbers = range(1, 10);

// Shuffle the array to randomize the order
shuffle($numbers);

// Display the randomized array
echo implode(", ", $numbers);

?>