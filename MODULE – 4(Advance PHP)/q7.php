<!-- Define Constructor and Destructor? -->

<!-- 
In PHP, constructors and destructors are special class methods used for object initialization and cleanup, respectively. They are automatically called when an object is instantiated and destroyed. Here's how constructors and destructors are defined and used in PHP:

Constructor:
A constructor is a special method in a PHP class that is automatically called when an object of the class is created.

In PHP, the constructor method is named __construct().

The constructor is commonly used to initialize object properties or perform any necessary setup tasks when an object is created.

If a class does not have a constructor explicitly defined, PHP provides a default constructor which does nothing.

Destructor:
A destructor is a special method in a PHP class that is automatically called when an object is destroyed or goes out of scope.

In PHP, the destructor method is named __destruct().

The destructor is commonly used to perform cleanup tasks such as releasing resources (closing files, database connections, etc.) when an object is no longer needed.

The destructor is called automatically by PHP's garbage collector when there are no more references to an object, or when the script ends.
Unlike constructors, destructors cannot accept any arguments.
 -->

 <?php
    class MyClass {
        public function __construct() {
            echo "Constructor called. Object initialized.";
        }

        public function __destruct() {
            echo "Destructor called. Object destroyed.";
        }
    }
    
    $obj = new MyClass(); 
    unset($obj);
    
 ?>