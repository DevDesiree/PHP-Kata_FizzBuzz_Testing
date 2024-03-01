<?php

use PHPUnit\Framework\TestCase;

require_once './FizzBuzz.php';

class FizzBuzzTest extends TestCase {

    public function testDivisibleBy3ReturnsFizz() {

        // ESCENARIO: Número divisible por 3 devuelve 'Fizz'

        /** 
         * DADO que tengo una instancia de FizzBuzz
         * CUANDO valido un número divisible por 3
         * ENTONCES debería devolver 'Fizz'
         * */ 

        // ARRANGE
        $fizzBuzz = new FizzBuzz();

        // ACT
        $result = $fizzBuzz->validate_prime_3_5(9);

        // ASSERT
        $this->assertEquals('Fizz', $result);
    }

    public function testDivisibleBy5ReturnsBuzz() {

        // ESCENARIO: Número divisible por 5 devuelve 'Buzz'

        /** 
         * DADO que tengo una instancia de FizzBuzz
         * CUANDO valido un numero divisible por 5
         * ENTONCES debería devolver 'Buzz'
         * */ 

        // ARRANGE
        $fizzBuzz = new FizzBuzz();

        // ACT
        $result = $fizzBuzz->validate_prime_3_5(10);

        // ASSERT
        $this->assertEquals('Buzz', $result);
    }

    public function testDivisibleBy3And5ReturnsFizzBuzz() {

        // ESCENARIO: Número divisible por ambos 3 y 5 devuelve 'FizzBuzz'

        /**
         * DADO que tengo una instancia de FizzBuzz
         * CUANDO valido un número divisible por 3 y 5
         * ENTONCES debería devolver 'FizzBuzz'
         */

        // ARRANGE
        $fizzBuzz = new FizzBuzz();

        // ACT
        $result = $fizzBuzz->validate_prime_3_5(15);

        // ASSERT
        $this->assertEquals('FizzBuzz', $result);
    }

    public function testNotDivisibleBy3Nor5ReturnsNumber() {

        // ESCENARIO: Número no divisible por 3 ni por 5 devuelve el propio número

        /**
         * DADO que tengo una instancia de FizzBuzz
         * CUANDO valido un número no divisible por 3 ni por 5
         * ENTONCES debería devolver el propio número
         */

        // ARRANGE
        $fizzBuzz = new FizzBuzz();

        // ACT
        $result = $fizzBuzz->validate_prime_3_5(7);

        // ASSERT
        $this->assertEquals(7, $result);
    }
}

// vendor/bin/phpunit tests/FizzBuzzTest.php  ---> Para ejecutar el test
?>
