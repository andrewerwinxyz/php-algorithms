<?php

/*
Euclid's algorithm to find the greatest common divisor of two numbers
This is the ugly way intended to show the original algorithm
*/

function Euclid($a, $b)
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

/*
A leaner way would be something like this:

function Euclid($a, $b)
{
    do while($b > 0)
    {
        $b -= $a
        $a -= $b

        return $a
    }
}
*/