<?php

declare(strict_types=1);

function getAward(int $score): ?string //?をつける事でnullも指定に含める事ができる
{
  return $score >= 100 ? 'Gold':null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;