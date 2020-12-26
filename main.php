<?php

$signal = 'red';

switch ($signal) {
  case 'red':
    echo 'stop' . PHP_EOL;
  break;
  case 'yellow':
    echo 'caution' . PHP_EOL;
  break;
  case 'blue':
  case'green':
    echo 'ok' . PHP_EOL;
  break;
  default:
    echo 'wrong signal' . PHP_EOL;
    break;
}

// breakを書き忘れるとbreakまで次の処理が実行される

