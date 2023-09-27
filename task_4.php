<?php

$studentGrades = [

    "student1" => [
        "Math" => 60,
        "English" => 70,
        "Science" => 80
    ],

    "student2" => [
        "Math" => 70,
        "English" => 80,
        "Science" => 90
    ],

    "student3" => [
        "Math" => 50,
        "English" => 70,
        "Science" => 60
    ]

];

function printAverageGrade($studentRecords)
{
    foreach ($studentRecords as $key => $record) {
        $avgMarks = array_sum($record) / count($record);
        if ($avgMarks <= 30) {
            echo "{$key}'s average grade is F. \n";
        } else if ($avgMarks > 30 && $avgMarks <= 40) {
            echo "{$key}'s average grade is D. \n";
        } else if ($avgMarks > 40 && $avgMarks <= 60) {
            echo "{$key}'s average grade is C. \n";
        } else if ($avgMarks > 60 && $avgMarks < 80) {
            echo "{$key}'s average grade is B. \n";
        } else {
            echo "{$key}'s average grade is A. \n";
        }
    }
}

printAverageGrade($studentGrades);
