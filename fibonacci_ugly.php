<?php

/*
Fibonacci sequence
Once again, not meant to be effient, but to show the actual algorithm
If you run this as is, it will get to INF very quickly and just keep going.
*/

function fibonacciSequence()
{
    $x = 1;
    $y = $fib = 0;
    a:
    print($fib);
    $fib = $x + $y;
    $x = $y;
    $y = $fib;
    goto a;
}
