<?php

function printFibonacci($n)
 {
 
  $a = 0;
  $b = 1;
 
  echo "Fibonacci Series \n";
 
  echo $a.' '.$b.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $c = $a + $b;
 
    echo $c.' ';
 
    $a = $b;
    $b = $c;
 
    }
}

 
printFibonacci(8);

echo '<br/>';
echo '<br/>';
echo '<br/>';




$num = 5;
$factorial = 1;
for ($x=$num; $x<=1; $x++) 
{
  $factorial = $factorial * $x;
}
echo "Factorial of $num is $factorial";


?>


