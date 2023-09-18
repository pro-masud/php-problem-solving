<?php 
$student_scores = [
    [
        "name" => "Al Amin Islam",
        'scores' => [85, 92, 78, 89, 55],
    ],
    [
        "name" => "Masud Rana",
        'scores' => [75, 88, 90, 79, 92],
    ],
    [
        "name" => "Ujjal Islam",
        'scores' => [92, 90, 91, 87, 94],
    ],
    [
        "name" => "Alif Hasan",
        'scores' => [94, 87, 91, 88, 85],
    ],
    [
        "name" => "Kadir Khan",
        'scores' => [80, 79, 82, 78, 88],
    ]
];

//Calculate and print the average score for each student.
foreach($student_scores as $student_score){
    $studentName = $student_score['name'];
    $countScores = count($student_score['scores']);
    $studentAllScores = array_sum($student_score['scores']);

    $singleAvegeScore = floor($studentAllScores / $countScores) ;

    echo "\n";

   echo "{$studentName} Highest Average Score Is {$singleAvegeScore}";
    
}

echo "\n";
echo "\n";

// Identify and print the student with the highest average score.
$maxAveragScore = -1; 
$studentNameHighest = "";
foreach($student_scores as $student_score){
    $studentName = $student_score['name'];
    $countScores = count($student_score['scores']);
    $studentAllScores = array_sum($student_score['scores']);

    $singleAvegeScore = floor($studentAllScores / $countScores) ;

    if( $singleAvegeScore > $maxAveragScore){
        $maxAveragScore = $singleAvegeScore;

        $studentNameHighest = $studentName;
    }
}

echo "{$studentNameHighest} Highest Number Is {$maxAveragScore}";

echo "\n";
echo "\n";
//Create a new array named `students_above_average` containing students whose average score is above 80.
$students_above_average = [];

foreach($student_scores as $student_score){
    $studentName = $student_score['name'];
    $countScores = count($student_score['scores']);
    $studentAllScores = array_sum($student_score['scores']);

    $singleAvegeScore = floor($studentAllScores / $countScores) ;

    if($singleAvegeScore > 80){
        $students_above_average[] = $student_score;
    }
}

// whose average student here

foreach($students_above_average as $singleStudent){
    $studnetName = $singleStudent['name'];
    $countScores = count($singleStudent['scores']);
    $studentAllScores = array_sum($singleStudent['scores']);

    $singleAvegeScore = floor($studentAllScores / $countScores) ;
    echo "\n";
    echo "{$studentName} Average Score: {$singleAvegeScore}";
}