<?php

$A = doubleval(fgets(STDIN)) * 3.5;
$B = doubleval(fgets(STDIN)) * 7.5;

$MEDIA  = (($A + $B)/11 );

echo "MEDIA = " . number_format($MEDIA, 5, '.', "") . PHP_EOL;