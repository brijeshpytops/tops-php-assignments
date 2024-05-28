<!-- Create multiple Traits and use it in to a single class? -->

<?php

trait Loggable {
    public function log($message) {
        echo "Logging: $message\n";
    }
}

trait Timestampable {
    public function getTimestamp() {
        return date('Y-m-d H:i:s');
    }
}

class ExampleClass {
    use Loggable, Timestampable;

    public function doSomething() {
        $this->log("Doing something at " . $this->getTimestamp());
    }
}

$obj = new ExampleClass();
$obj->doSomething(); 

?>