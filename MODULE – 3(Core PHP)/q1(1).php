<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else -->
<?php
function calculatePercentage($marks) {
    $totalMarks = array_sum($marks);
    $percentage = ($totalMarks / 500) * 100;
    return $percentage;
}

function calculateGrade($percentage) {
    if ($percentage >= 90) {
        return 'A+';
    } elseif ($percentage >= 80 && $percentage < 90) {
        return 'A';
    } elseif ($percentage >= 70 && $percentage < 80) {
        return 'B';
    } elseif ($percentage >= 60 && $percentage < 70) {
        return 'C';
    } elseif ($percentage >= 50 && $percentage < 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$subjects = array("Physics", "Chemistry", "Biology", "Mathematics", "Computer");
$marks = array();

foreach ($subjects as $subject) {
    echo "Enter marks for $subject: ";
    $marks[$subject] = intval(trim(fgets(STDIN)));
}

$percentage = calculatePercentage($marks);

$grade = calculateGrade($percentage);

echo "\nPercentage: $percentage%\n";
echo "Grade: $grade\n";
?>
