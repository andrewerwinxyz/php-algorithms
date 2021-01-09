<?php

$array = [34,2,6,57,0,4,45];
$array = quickSort($array);
echo implode(',', $array);

function quickSort($input)
{
    $lessThan = [];
    $greaterThan = [];

	if(count($input) < 2)
	{
		return $input;
	}

	$key = key($input);
    $shift = array_shift($input);
    
	foreach($input as $value)
	{
		if($value <= $shift)
		{
			$lessThan[] = $value;
        }
        elseif($value > $shift)
		{
			$greaterThan[] = $value;
		}
    }
    
	return array_merge(quickSort($lessThan), [$key => $shift], quickSort($greaterThan));
}
