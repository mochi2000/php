<?php

$scores = [
  '1' => 90,
  '2' => 80,
  '3' => 40,
  //'' => で配列の名前を指定できる、これをキーと呼ぶ
];

foreach ($scores as $key => $score) {
  echo $key . '-' . $score . PHP_EOL;
}