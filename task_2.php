<?php

$numbers = range(1, 10, 1);

function getOddNums($numbers)
{
    $cb = fn ($nums) => $nums % 2 !== 0;
    $filteredNums = array_filter($numbers, $cb);
    print_r($filteredNums);
}

getOddNums($numbers);
