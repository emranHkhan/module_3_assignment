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
        echo "{$key}'s average grade is " . array_sum($record) / count($record) . "\n";
    }
}

printAverageGrade($studentGrades);
