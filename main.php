<?php

$input = ' dot_install' ;
$input = trim($input);
echo strpos($input,'_'). PHP_EOL;

$input = str_replace('_','-', $input);
echo $input . PHP_EOL;