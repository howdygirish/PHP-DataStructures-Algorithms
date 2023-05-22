<?php
/**
 * Linear search in PHP
 *
 * @param Array $list an array of integers to search
 * @param Integer $el an integer number to search in the list
 * @return Integer the position of the target (-1 if not found)
 */
function linearSearch(array $list, int $el): int
{
    for ($i = 0; $i < count($list); $i++) {
        if ($el === $list[$i]) {
            return $i + 1;
        }
    }
    return -1;
}

$arr = [11, 51, 78, 56, 45, 17];
$position = linearSearch($arr, 51);

if ($position === -1) {
    echo "Element not found";
} else {
    echo "Element found at position $position";
}
