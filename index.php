<?php
// Prompt user to enter two numbers
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");

// Convert inputs to integers
$num1 = (int) $num1;
$num2 = (int) $num2;

// Add the numbers and display the result
echo $num1 + $num2 . ": ";
?>
