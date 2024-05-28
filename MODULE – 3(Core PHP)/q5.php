<!-- Write a program to find whether a number is Armstrong or not Write a
program to print the below format :
5 9
2610
3711
4812 -->    

<?php
function isArmstrong($number) {
    $numDigits = strlen((string)$number); 
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

  
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 153; 
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
