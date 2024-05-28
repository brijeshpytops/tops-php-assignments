<!-- Write a PHP script which decodes the following JSON string. -->

<?php

$json_string = '{"name":"John","age":30,"city":"New York"}';

$data = json_decode($json_string, true);

if ($data === null) {
    echo "Error decoding JSON string.\n";
} else {
    echo "Name: " . $data['name'] . "\n";
    echo "Age: " . $data['age'] . "\n";
    echo "City: " . $data['city'] . "\n";
}
?>
