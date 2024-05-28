<!-- Write program to remove duplicate values from array -->

<?php
function remove_duplicate($original_array){
    return array_values(array_unique($original_array));
}

$numbers = array(1,1,2,3,4,5,5,6,6,6,7,8,9,10);

$unique_value_arr = remove_duplicate($numbers);

print_r($unique_value_arr);
?>