<?php

$A = doubleval(fgets(STDIN)) * 2;
$B = doubleval(fgets(STDIN)) * 3;
$C = doubleval(fgets(STDIN)) * 5;


$MEDIA  = (($A + $B + $C)/10 );

echo "MEDIA = " . number_format($MEDIA, 1, '.', "") . PHP_EOL;