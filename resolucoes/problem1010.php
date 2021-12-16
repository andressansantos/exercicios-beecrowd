<?php

 fscanf(STDIN, "%d %d %f\n", $c1, $p1, $val1);
 fscanf(STDIN, "%d %d %f\n", $c2, $p2, $val2);

$cal = ($p1 * $val1) + ($p2 * $val2);

echo "VALOR A PAGAR: R$ " . number_format($cal, 2, '.', "") . PHP_EOL;