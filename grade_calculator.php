<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    // Calculate the average score
    $average_score = ($score1 + $score2 + $score3) / 3;

    // Determine the corresponding letter grade
    $letter_grade = "";

    if ($average_score >= 90) {
        $letter_grade = "A";
    } elseif ($average_score >= 80) {
        $letter_grade = "B";
    } elseif ($average_score >= 70) {
        $letter_grade = "C";
    } elseif ($average_score >= 60) {
        $letter_grade = "D";
    } else {
        $letter_grade = "F";
    }

    echo "<p>Average Score: $average_score</p>";
    echo "<p>Letter Grade: $letter_grade</p>";
}
?>
