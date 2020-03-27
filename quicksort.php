<?php

/*
This only works with an array of more than 1 number!
*/

function quickSort($input)
 {
    $lessThan = [];
    $greaterThan = [];
    
	$key = key($input);
    $shift = array_shift($input);
    
	foreach($input as $value)
	{
		if($value <= $shift)
		{
			$lessThan[] = $value;
        }
        elseif ($value > $shift)
		{
			$greaterThan[] = $value;
		}
    }
    
	return array_merge(quickSort($lessThan), [$key => $shift], quickSort($greaterThan));
}