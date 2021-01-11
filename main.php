<?php

function sum(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

 echo sum(2,2,2) . PHP_EOL;
 echo sum(3,3,3,3,3,3) . PHP_EOL;

 