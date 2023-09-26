<?php

$grades = [85, 92, 78, 88, 95];

function sortGradesAsc($grades)
{
    rsort($grades);
    print_r($grades);
}

sortGradesAsc($grades);
