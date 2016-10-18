<?php
  class FizzBuzz {
    public function isDivisibleByThree($number) {
      return $this->isDivisibleBy($number, 3);
    }

    public function isDivisibleByFive($number) {
      return $this->isDivisibleBy($number, 5);
    }

    public function isDivisibleByFifteen($number) {
      return $this->isDivisibleBy($number, 15);
    }

    private function isDivisibleBy($number, $divisor) {
      return $number % $divisor == 0;
    }

    public function says($number) {
      if($this->isDivisibleByFifteen($number)) {
        return "FizzBuzz";
      }
      if($this->isDivisibleByThree($number)) {
        return "Fizz";
      }

      if($this->isDivisibleByFive($number)) {
        return "Buzz";
      }

      return $number;
    }
  }
?>
