<!-- 
    How can you declare the array (all type) in PHP? Explain with example
Covert a JSON string to array.
 -->

<?php
//  Indexed Array:
$indexedArray = array("apple", "banana", "cherry");

// Associative Array:
$associativeArray = array("first_name" => "John", "last_name" => "Doe", "age" => 30);

// Multidimensional Array: 
$multiArray = array(
    array("apple", "banana", "cherry"),
    array("red", "yellow", "blue"),
    array("square", "circle", "triangle")
);

// convert a JSON string to an array
$jsonString = '{"name":"John","age":30,"city":"New York"}';
$arrayFromJson = json_decode($jsonString, true);

print_r($arrayFromJson);


?>