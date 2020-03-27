<?php

/*
A clean way to get the greatest common divisor of two numbers
*/

function euclid($a, $b)
{
    print($b ? euclid($b, $a % $b) : $a);
}