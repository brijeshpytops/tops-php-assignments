<!-- How can you tell if a number is even or odd without using any Condition or
loop? -->

<?php
function isEven($number) {
    return !($number & 1);
}

$number = 6;
if (isEven($number)) {
    echo "$number is even";
} else {
    echo "$number is odd";
}
?>
