<?php

$rate = 1.1; //グローバル

function sum($a, $b, $c) 
{
  $rate = 1.08; //ローカル
  return $a+$b+$c * $rate. PHP_EOL;
}

echo sum(100,200,300) + sum(200,400,400) .PHP_EOL;