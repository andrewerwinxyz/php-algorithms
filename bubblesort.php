<?php

$array = [34,2,6,57,0,4,45];
$array = bubbleSort($array);
echo implode(',', $array);

function bubbleSort($input)
{
    do
    {
        $swapped = false;

        for($i = 0, $count = count($input) - 1; $i < $count; $i++)
        {
            if($input[$i] > $input[$i + 1])
            {
                list($input[$i + 1], $input[$i]) = [$input[$i], $input[$i + 1]];
                $swapped = true;
            }
        }
    }
    while($swapped);

    return $input;
}
