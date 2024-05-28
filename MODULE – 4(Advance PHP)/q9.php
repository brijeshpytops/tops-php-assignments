<!-- How to Call Parent Constructor?  -->

<!-- 
In PHP, to call a parent class constructor from within a child class constructor, you can use the parent::__construct() syntax. This allows you to invoke the constructor of the parent class and perform any initialization tasks defined in it before executing the code in the child class constructor. 
-->

<?php
class P {
    public function __construct() {
        echo "Parent constructor called.";
    }
}

class C extends P {
    public function __construct() {
        echo "Child constructor called.". "</br>";
        P::__construct();
    }
}

$obj = new C();
?>
