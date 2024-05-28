<!-- Write PHP Script of Object Iteration? -->

<?php
class MyClass implements IteratorAggregate {
    private $data = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function getIterator() {
        return new ArrayIterator($this->data);
    }
}

$obj = new MyClass(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]);

foreach ($obj as $key => $value) {
    echo "$key: $value\n";
}

?>