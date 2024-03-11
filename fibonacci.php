<?php

$a = 0;
$b = 1;

echo "{$a}\n";
echo "{$b}\n";

while ($b < 10000) {
  $c = $a + $b;
  echo "{$c}\n";

  $a = $b;
  $b = $c;
  
}