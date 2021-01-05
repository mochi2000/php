<?php

declare(strict_types=1);

function showInfo(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
} 

showInfo('taguchi', 40);

/*
declare文を入れておく事で型指定が厳密になり
文字列で数字を指定した場合にはint型には通らなくなる
*/

