<?php 
$student_scores = [
    [
        "name" => "Al Amin Islam",
        'scores' => [50, 60, 45, 70, 45],
    ],
    [
        "name" => "Masud Rana",
        'scores' => [88, 50, 45, 75, 45],
    ],
    [
        "name" => "Alif Hasan",
        'scores' => [56, 60, 76, 70, 65],
    ],
    [
        "name" => "Kadir Khan",
        'scores' => [65, 74, 63, 58, 54],
    ],
    [
        "name" => "Ujjal Islam",
        'scores' => [50, 78, 59, 48, 73],
    ]
];

//Calculate and print the average score for each student.
foreach($student_scores as $student_score){
    $studentName = $student_score['name'];
    $countScores = count($student_score['scores']);
    $studentAllScores = array_sum($student_score['scores']);

    $singleAvegeScore = floor($studentAllScores / $countScores) ;

    echo "\n";

   echo "{$studentName} Average Score Is {$singleAvegeScore}";
    
}
