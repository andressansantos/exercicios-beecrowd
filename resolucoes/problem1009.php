<?php

$name = (fgets(STDIN));
$wage = doubleval(fgets(STDIN));
$total = doubleval(fgets(STDIN));

$cal = $wage + (($total * 15 )/ 100 );

echo "TOTAL = R$ " . number_format($cal, 2, '.', "") . PHP_EOL;