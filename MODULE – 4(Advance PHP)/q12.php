<!-- What are PHP Magic Methods/Functions? List them Write program for Static 
Keyword in PHP? -->

<!--
PHP magic methods, also known as magic functions, are predefined methods in PHP classes that are called in response to certain events or actions. They are prefixed with two underscores (__) and have specific names that trigger them. These methods allow you to implement functionality such as object serialization, property overloading, method overloading, etc. Here's a list of PHP magic methods:

__construct(): Constructor method, called when an object is created. 

__destruct(): Destructor method, called when an object is destroyed or goes out of scope.

__call($method, $arguments): Called when an undefined or inaccessible method is invoked on an object.

__callStatic($method, $arguments): Called when an undefined or inaccessible static method is invoked on a class.

__get($name): Called when an undefined or inaccessible property is accessed using the -> operator.

__set($name, $value): Called when an undefined or inaccessible property is set using the -> operator.

__isset($name): Called when isset() or empty() is used on an undefined or inaccessible property.

__unset($name): Called when unset() is used on an undefined or inaccessible property.

__toString(): Called when an object is treated as a string (e.g., echo $object;).

__invoke($args): Called when an object is treated as a function.

__clone(): Called when an object is cloned.

__debugInfo(): Called when var_dump() is used on an object.

__set_state($properties): Called by var_export() when exporting an object.

__sleep(): Called before serialization of an object.

__wakeup(): Called after unserialization of an object.

-->

<?php
class Counter {
    public static $count = 0; 

    public function __construct() {
        self::$count++; 
    }

    public static function getCount() {
        return self::$count;
    }
}

$obj1 = new Counter();
$obj2 = new Counter();
$obj3 = new Counter();
$obj4 = new Counter();

echo "Total count: " . Counter::getCount(); 

?>
