<?php

/*
A clean way to get the greatest common divisor of two numbers
*/

function euclid($a, $b)
{
    return $b ? euclid($b, $a % $b) : $a;
}