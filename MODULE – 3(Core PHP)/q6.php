<!-- 
    Write a program for this Pattern:
*****
*
*
*
*****
 -->

 <?php
function printPattern() {
    $size = 5;
    
    echo str_repeat("*", $size) . "\n";
    for ($i = 0; $i < $size - 2; $i++) {
        echo "*\n";
    }
    echo str_repeat("*", $size) . "\n";
}

printPattern();
?>
