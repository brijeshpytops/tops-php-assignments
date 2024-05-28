<!-- What Happen, If Constructor Is Defined As Private Or Protected? -->

<!-- In PHP, if a constructor is defined as private or protected, it restricts the access to the constructor method from outside the class itself.  -->

<!-- Private Constructor:

If a constructor is defined as private, it means that it can only be accessed from within the class itself. Objects cannot be instantiated using this constructor from outside the class.
This is often used in scenarios like implementing the Singleton design pattern, where you want to ensure that only one instance of a class is created. -->

<?php
class myClass{
    private function __construct(){
        echo "Private Constructor called"."<br>";
    }

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
            $instance = new self();
        }
        return $instance;
    }
}

// $obj = new MyClass(); // Fatal error: Uncaught Error: Call to private myClass::__construct() from global scope in C:\xampp\htdocs\PHP_WITZCODE\php-assignment-tops\MODULE – 4(Advance PHP)\q11.php:25 Stack trace: #0 {main} thrown in C:\xampp\htdocs\PHP_WITZCODE\php-assignment-tops\MODULE – 4(Advance PHP)\q11.php on line 25


$obj = myClass::getInstance();
?>


<!-- Protected Constructor:

If a constructor is defined as protected, it means that it can only be accessed from within the class itself and its subclasses (child classes). Objects cannot be instantiated using this constructor from outside the class or its subclasses.
This is often used when you want to ensure that only the class itself and its subclasses can create instances. -->

<?php
class myParrentClass{
    protected function __construct(){
        echo "protected Constructor called"."<br>";
    }
}

class myChildClass extends myParrentClass{
    public function __construct(){
        myParrentClass::__construct();
    }
}

$obj1 = new myChildClass();

?>