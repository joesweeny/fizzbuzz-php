<?php
  use PHPUnit\Framework\TestCase;
  require_once "fizzBuzz.php";

  class FizzBuzzTest extends TestCase {
    protected function setUp() {
      $this->fizzbuzz = new FizzBuzz();
    }

    public function testIsDivisbleBy() {
      // is divisible by 3
      $this->assertTrue($this->fizzbuzz->isDivisibleByThree(3));
      // is divisible by 5
      $this->assertTrue($this->fizzbuzz->isDivisibleByFive(5));
      // is divisible by 15
      $this->assertTrue($this->fizzbuzz->isDivisibleByFifteen(15));
    }

    public function testIsNotDivisibleBy() {
      // is NOT divisible by 3
      $this->assertFalse($this->fizzbuzz->isDivisibleByThree(1));
      // is NOT divisible by 5
      $this->assertFalse($this->fizzbuzz->isDivisibleByFive(1));
      // is NOT divisible by 15
      $this->assertFalse($this->fizzbuzz->isDivisibleByFifteen(1));
    }

    public function testSays() {
      // return "Fizz"
      $this->assertEquals("Fizz", $this->fizzbuzz->says(3));
      // return "Buzz"
      $this->assertEquals("Buzz", $this->fizzbuzz->says(5));
      // return "FizzBuzz"
      $this->assertEquals("FizzBuzz", $this->fizzbuzz->says(15));
      // return number
      $this->assertEquals(4, $this->fizzbuzz->says(4));
    }

  }


?>
