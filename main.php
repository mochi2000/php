<?php

$input = ' こんにちは' ;
$input = trim($input);
echo mb_strpos($input,'に'). PHP_EOL;

$input = str_replace('にち','ばん', $input);
echo $input . PHP_EOL;