<?php
/*
Question1 : What is The Output
      1- somerar is 16
      2- null
      3- true
*/
//----------------------------------------------
//Question 2 : Write Php Code To Solve These Problems 
     //1-
     function fibonacci($n){
        $fibonacciSeries = [];
        $fibonacciSeries[0] = 0;
        $fibonacciSeries[1] = 1;
        
        for ($i = 2; $i < $n; $i++){
            $fibonacciSeries[$i] = $fibonacciSeries[$i-1] + $fibonacciSeries[$i-2];
        }
        
        return $fibonacciSeries;
    }
    $numTerms = 10;
    $result = fibonacci($numTerms);
    
    echo "Fibonacci Series for first $numTerms terms: ";
    foreach($result as $value){
        echo $value . " ";
    }
//------------------------------------------------------------------------------------------------------------
    //2-
    function isLeapYear($year) {
        if ($year % 4 == 0 && $year % 100 != 0) {
          return true;
        } else if ($year % 400 != 0) {
          return false;
        } else {
          return true;
        }
      }     
      if (isLeapYear($year)) {
        echo "$year is a leap year.";
      } else {
        echo "$year is not a leap year.";
      }

//------------------------------------------------------------------------------------------------------------
    //3-
    function generateUnique($min, $max, $count) {
        $uniqueRandomNumbers = [];

        while (count($uniqueRandomNumbers) < $count) {
            $randomNumber = rand($min, $max);
    
            if (!in_array($randomNumber, $uniqueRandomNumbers)) {
                $uniqueRandomNumbers[] = $randomNumber;
            }
        }
        return $uniqueRandomNumbers;
    }
    $min = 1;
    $max = 100;
    $count = 10;
    $uniqueRandomNumbers = generateUnique($min, $max, $count);
    echo "Unique random numbers: ";
    echo implode(", ", $uniqueRandomNumbers);
//------------------------------------------------------------------------------------------------------------
    //4-
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo $i * $j;
        }
    }
//------------------------------------------------------------------------------------------------------------
    //5-
    function removeDuplicates($sortedList) {
        $uniqueElements = [];
        $previousElement = null;
    
        foreach ($sortedList as $element) {
            if ($element != $previousElement) {
                $uniqueElements[] = $element;
            }
            $previousElement = $element;
        }
        return $uniqueElements;
    }
    $sortedList = [1, 1, 2, 2, 3, 4, 5, 5];
    $uniqueList = removeDuplicates($sortedList);
    
    print_r($uniqueList);
//------------------------------------------------------------------------------------------------------------
    //6-
    class Animal {
        private $name;
      
        public function __construct($name) {
          $this->name = $name;
        }
      
        public function toString() {
          return "Animal: Animal [name=\"{$this->name}\"]";
        }
      }
      
      class Mammal extends Animal {
        public function toString() {
          return "Mammal: Mammal [" . parent::toString() . "]";
        }
      }
      
      class Cat extends Mammal {
        public function greets() {
          echo "Meow";
        }
      
        public function toString() {
          return "Cat: Cat [" . parent::toString() . "]";
        }
      }
      
      class Dog extends Mammal {
        public function greets() {
          echo "Woof";
        }
      
        public function greetsAnotherDog(Dog $otherDog) {
          echo "Woooof";
        }
      
        public function toString() {
          return "Dog: Dog [" . parent::toString() . "]";
        }
      }

      $cat = new Cat("Whiskers");
      $dog = new Dog("Fido");
      echo $cat->toString() . PHP_EOL;
      echo $dog->toString() . PHP_EOL;
      $cat->greets();
      $dog->greets();
      $dog->greetsAnotherDog($dog);
//------------------------------------------------------------------------------------------------------------

/*
Question 3 : True Or False
    1- false
    2- false
    3- true 
    4- false
    5- true 
*/
    
?>