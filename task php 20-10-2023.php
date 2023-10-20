<?php
// 1-Check The Number Is Even or Odd.
   $num1 = 10;
   $result = $num1%2;

   if($result == 0){

    echo "even";
   }else{

    echo "odd";
   }

   echo '<br>';
// 2-Fizz Buzz Game.
   $n=20;
   for( $i=1; $i <= $n; $i ++){
    if( $i%3 ==0 && $i%5 ==0 ){
        echo "fizzbuzz";
        echo '<br>';
    }elseif( $i%3 ==0){
        echo "fizz";
        echo '<br>';
    }elseif( $i%5 ==0){
        echo "buzz";
        echo '<br>';
    }else{
        echo $i;
        echo '<br>';
    }
   }
   echo '<br>';

// 3-Reverse String for example welcome => emoclew.
   echo strrev("youssefnassar");
   echo '<br>';

// 4-Compute Circle Area and Circumference.
   $radius = 4;
   $circle_area = pi() * $radius * $radius;
   $circumference = 2 * pi() * $radius;

   echo "the circle area is : $circle_area";
   echo '<br>';
   echo "the circumference is : $circumference";

   echo '<br>';

// 5-Check two given numbers and return true if one of the number is 50 or if their sum is 50. 
   $a = 25;
   $b = 25;
   if($a == 50){
    echo "true";
   }elseif($b == 50){
    echo "true";
   }elseif($a+$b == 50){
    echo "true";
   }else{
    echo "false";
   }
   
   echo '<br>';

// 6-check from two given integers, whether one is positive and another one is negative. 
   $s = -1;
   $d = 1;
   if($s > 0 & $d < 0){
    echo "$s is positive and $d is negitive ";
   }elseif($s < 0 & $d > 0){
    echo "$s is negitive and $d is positive";
   }else{
    echo "error";
   }

   echo '<br>';

//7- check whether a given positive number is a multiple of 5 or a multiple of 8.
  $g = 15;
  if( $g%5 == 0 && $g%8 == 0){
   echo "$g is multiple of 5 and 8";
  }elseif($g%5  == 0){
   echo"$g is multiple of 5";
  }elseif($g%8 == 0){
   echo "$g is multiple of  8";
  }else{
   echo "error";
  }

  echo '<br>';

//8-find the largest of three given integers.
  $l= 10;
  $p= 20;
  $k= 30;
  if($l>$p && $l>$k){
   echo "$l is the largest number";
  }elseif($p>$l && $p>$k){
   echo "$p is the largest number";
  }elseif($k>$l && $k>$p){
   echo "$k is the largest number";
  }else{
   echo "error";
  }
   
  echo '<br>';
   
//9-Compute The sum of the numbers from 1 to 10
  $sum= 0;
  for($y = 1; $y<=10; $y++){
   $sum += $y;
  }
  echo "The sum of the numbers from 1 to 10 is ". $sum ;

  echo '<br>';

//10-display the pattern like right angle triangle using an asterisk.
  
//11- check whether a given number is positive or negative. 
   $t = 0;
   if($t > 0 ){
    echo "the number is positive ";
   }elseif($t<0){
    echo "the number is  negative";
   }else{
      echo "the number is 0";
   }

   echo '<br>';

//12-store elements in an array and print it.  
   $w =[1,2,3,4,5,6,7,8,9,10];
   echo "<pre>";
   print_r($w);
   echo "</pre>";

   echo '<br>';

//13-print the sum of two numbers.
   $q= 5;
   $c= 7;
   $the_sum= $q+$c;

   echo "the sum of $q and $c is : $the_sum";

   echo '<br>';

// 14-calculate the factorial of a given number.

// 15-Create Simple Calculator (+ , - , * , /).

?>