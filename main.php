<?php

$name = 'apple';
$score = 32.333;

$info = "[$name][$score]";
echo $info . PHP_EOL;

$info = sprintf("[%-15s][%010.2f]", $name, $score);
echo $info . PHP_EOL;