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
    echo 'ok' . PHP_EOL;
  break;
}

