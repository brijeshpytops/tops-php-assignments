<!-- Declare a Multi Dimensioned array of floats called balances having Three
rows and five columns. -->

<?php

$balances = array(
    array(10.0, 20.0, 30.0, 40.0, 50.0),
    array(110.0, 220.0, 330.0, 440.0, 550.0),
    array(1110.0, 2220.0, 3330.0, 4440.0, 5550.0)
);


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $balances[$i][$j] . " ";
    }
    echo "\n";
}

?>