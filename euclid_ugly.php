<?php

/*
Euclid's algorithm to find the greatest common divisor of two numbers
This is the ugly way intended to show the original algorithm
*/

function euclid($a, $b)
{
    a:
    if($b == 0) goto c;
    if($a > $b) goto b;
    $b = $b - $a;
    goto a;
    b:
    $a = $a - $b;
    goto a;
    c:
    print($a);
}
