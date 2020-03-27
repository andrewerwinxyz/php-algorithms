<?php

/*
A cleaner implementation of the Fibonacci sequence
*/

function loop($i, Generator $set)
{
    while($i-- > 0 && $set->valid())
    {
        yield $set->current();
        $set->next();
    }
}

function fib()
{
    yield $i = 0;
    yield $j = 1;

    while(true)
    {
        yield $k = $i + $j;
        $i = $j;
        $j = $k;
    }
}

foreach(loop(10000, fib()) as $item)
{
    echo $item, PHP_EOL;
}