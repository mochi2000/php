<?php

// function sum($a, $b, $c) 
// {
//   return ($a+$b+$c) ;
// }

//無名関数
$sum = function ($a, $b, $c) {
  return $a+$b+$c;
};

echo $sum(300,300,300) . PHP_EOL;

