<?php

$R = trim(fgets(STDIN));
$pi =  3.14159;
$cal = ((4/3) * $pi) * ($R ** 3);

echo "VOLUME = " . number_format($cal, 3, '.', "") . PHP_EOL;