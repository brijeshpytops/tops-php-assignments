<!-- Are Parent Constructor Called Implicitly When Create An ObjectOf Class? -->

<?php
class ParentClass {
    public function __construct() {
        echo 'ParentClass constructor called<br>';
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        parent::__construct(); 
        echo 'ChildClass constructor called<br>';
    }
}

$childObject = new ChildClass();

?>