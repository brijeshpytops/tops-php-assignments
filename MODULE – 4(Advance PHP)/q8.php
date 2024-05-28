<!-- How to Load Classes in PHP? -->

Classes are typically stored in individual files, with each file containing one class definition. To load classes in PHP, you can use the require or require_once function to include the file that contains the class definition. 

// MyClass.php
class MyClass {
    public function __construct() {
        echo 'MyClass instance created';
    }
}


// index.php
require_once 'MyClass.php';
<!-- require_once 'path/to/MyClass.php';
require_once '/var/www/html/path/to/MyClass.php'; -->

$myObject = new MyClass();
