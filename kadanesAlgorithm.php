<?php
/*
 *
 * Find the maximum sub-array sum for a given array
 */
function kadane($array)
{
    $n = count($array);
    $max = $array[0];
    $current_max = $array[0];
    for ($i = 1; $i < $n; $i++) {
        $current_max = max($current_max, ($current_max + $array[$i]));
        if ($current_max > $max) {
            $max = $current_max;
        }
    }
    return $max;
}

$arr = [10, -3, 2, 1, 4, -1];
var_dump(kadane($arr)); // result - 17
