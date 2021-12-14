<?php

$number = trim(fgets(STDIN));
$time = trim(fgets(STDIN));
$wage = doubleval(fgets(STDIN));
$cal = $wage * $time;

echo "NUMBER = " . $number . PHP_EOL;
echo "SALARY = U$ " . number_format($cal, 2, '.', "") . PHP_EOL;