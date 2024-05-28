<!-- Write a PHP program to check Leap years between 1901 to 2016 Using
nested if -->
<?php
for ($year = 1901; $year <= 2016; $year++) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                echo "$year\n";
            }
        } else {
            echo "$year\n";
        }
    }
}
?>
