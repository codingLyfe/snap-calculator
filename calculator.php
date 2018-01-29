<?php


// my attempt at calculator challenge
function main1 ($input) {

	if($input == "+") {
		addition(1, 1);
	} elseif ($input == "-") {
		subtraction(2, 2);
	} elseif($input == "*") {
		multiplication(6,9);
	} elseif($input == "/") {
		division(9,3);
	}

}

function addition($num1, $num2) {
	 echo $num1 + $num2;
}

function subtraction($num1, $num2) {
	echo $num1 - $num2;
}

function multiplication($num1, $num2) {
	echo $num1 * $num2;
}

function division($num1, $num2) {
	echo $num1 / $num2;
}


// answer to challenge

function add(float $first, float $second) : float {
	return($first + $second);
}

function subtract(float $first, float $second) : float {
	return($first - $second);
}

function multiply(float $first, flaot $second) : float {
	return($first * $second);
}

// remember to use an if block to prevent division by 0
function divide(float $first, float $second) : float {
	return($first / $second);
}

function main(flaot $first, float $second) : void {
	echo "Addition:" . add($first, $second) . PHP_EOL;
	echo "Subtraction:" . subtract($first, $second) . PHP_EOL;
	echo "Multiplication:" . multiply($first, $second) . PHP_EOL;
	echo "Division:" . divide($first, $second) . PHP_EOL;
}

main(42,5);