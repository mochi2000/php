<?php

function sum($a, $b, $c) 
{
  $total = ($a+$b+$c) ;

  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  
  return $total < 0 ? 0 : $total;
  // 上と同じ結果
  // 条件 ? true : false;
}

echo sum(100,110,100) . PHP_EOL;




