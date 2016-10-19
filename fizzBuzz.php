<?php
  class FizzBuzz {
    public function isDivisibleByThree($number) {
      return $this->isDivisibleBy($number, 3);
      // return $number % 3 == 0;
    }

    public function isDivisibleByFive($number) {
      return $this->isDivisibleBy($number, 5);
    }

    public function isDivisibleByFifteen($number) {
      return $this->isDivisibleBy($number, 15);
    }

    public function isDivisibleBy($number, $divisor) {
      return $number % $divisor == 0;
    }

    public function says($number) {
      if ($this->isDivisibleByFifteen($number)) {
        return "FizzBuzz";
      } elseif ($this->isDivisibleByThree($number)) {
        return "Fizz";
      } elseif ($this->isDivisibleByFive($number)) {
        return "Buzz";
      } else {
        return $number;
      }
    }
  }
?>
