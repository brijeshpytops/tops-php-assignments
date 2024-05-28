<!-- 
    write a PHP program for find „Thursday‟ in week using switch
Function.
 -->
<?php
function findThursdayInWeek($day) {
    switch ($day) {
        case 'Monday':
            echo "Thursday is not in this week.";
            break;
        case 'Tuesday':
            echo "Thursday is not in this week.";
            break;
        case 'Wednesday':
            echo "Thursday is not in this week.";
            break;
        case 'Thursday':
            echo "Thursday is in this week.";
            break;
        case 'Friday':
            echo "Thursday is in this week.";
            break;
        case 'Saturday':
            echo "Thursday is in this week.";
            break;
        case 'Sunday':
            echo "Thursday is in this week.";
            break;
        default:
            echo "Invalid day entered.";
    }
}

$day = "Thursday";
findThursdayInWeek($day);
?>
