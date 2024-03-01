<?php

class FizzBuzz
{
    public function validate_prime_3_5($number)
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            return "FizzBuzz";
        } elseif ($number % 5 == 0) {
            return "Buzz";
        } elseif ($number % 3 == 0) {
            return "Fizz";
        } else {
            return $number;
        }
    }
}

$fizzBuzzClass = new FizzBuzz();

for ($i = 1; $i <= 15; $i++) {
    echo $fizzBuzzClass->validate_prime_3_5($i) . "\n";
}

