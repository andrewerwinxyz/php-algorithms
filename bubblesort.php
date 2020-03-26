<?php

/*
Simple Bubble Sort 
This isn't meant to be efficient, but to show how bubble sort works
*/

 function bubbleSort($a, $b)
 {
     for($i = sizeof($a); $i >= 1; $i--)
     {
        for($j = 1; $j <= $i; $j++)
        {
            if($a[$j - 1] > $a[$j])
            {
                $x = $a[$j - 1];
                $y = $b[$j - 1];
                $a[$j - 1] = $a[$j];
                $b[$j - 1] = $b[$j];
                $a[$j] = $x;
                $b[$j] = $y;
            }
        }
     }
 }
