<?php

function showAd($message = 'Ad') {
  echo '------' . PHP_EOL;
  echo '--' . $message . '--' . PHP_EOL;
  echo '------' . PHP_EOL;
}


echo 'こんにちは' . PHP_EOL;
showAd('ad');
echo 'こんばんは' . PHP_EOL;
showAd('Footer ad');