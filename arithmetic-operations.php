<?php

echo "\n1 -\n";
//Exercise #1
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
$firstNumber = (int) readline("Enter a number: ");
$secondNumber = (int) readline("Enter another number: ");
if (($firstNumber === 15 || $secondNumber === 15) || ($firstNumber + $secondNumber === 15 || ($firstNumber - $secondNumber) === 15)) {
    echo "True";
}

echo "\n2 -\n";
//Exercise #2
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.
$number = 33;
if ($number % 2 === 0) {
    echo "Even Number\n";
} else {
    echo "Odd Number\n";
}
echo "bye!";

echo "\n3 -\n";
//Exercise #3
//Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily. Also compute and display the average. The output shall look like:
//The sum of 1 to 100 is 5050
//The average is 50.5
$lowerBound = 1;
$upperBound = 100;
$total = 0;
for ($i = $lowerBound; $i <= $upperBound; $i++) {
    $total += $i;
}
echo "The sum of $lowerBound to $upperBound is $total\n";
echo "The average is " . ($total / ($upperBound - $lowerBound + 1));

echo "\n4 -\n";
//Exercise #4
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.
$startValue = 1;
$endValue = 10;
$product = $startValue;
for ($i = $startValue + 1; $i <= $endValue; $i++) {
   $product *= $i;
}
echo $product;

echo "\n5 -\n";
//Exercise #5
//Write a program that picks a random number from 1-100. Give the user a chance to guess it. If they get it right, tell them so. If their guess is higher than the number, say "Too high." If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
$correctAnswer = rand(1, 100);
$userResponse = (int) readline("Guess the number: ");
if ($userResponse > $correctAnswer) {
    echo "Too high! The correct answer is $correctAnswer.";
} elseif ($userResponse < $correctAnswer) {
    echo "Too low! The correct answer is $correctAnswer.";
} else {
    echo "Correct answer!";
}

echo "\n";