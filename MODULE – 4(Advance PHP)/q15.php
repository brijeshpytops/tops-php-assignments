<!-- Use of The $this keyword -->

<!-- In PHP, $this is a special variable that refers to the current instance of the class. It is used within class methods to access properties and methods of the same object. -->

<!-- 
Accessing Properties: 

You can use $this->propertyName to access the properties of the current object from within its methods.

Accessing Methods: 

You can use $this->methodName() to call other methods of the same object.

Constructor: 

$this is commonly used inside a class constructor to refer to the object being constructed.

Method Chaining: 

$this allows for method chaining, where multiple methods can be called sequentially on the same object.

Within Callbacks: 

$this can also be used within callback functions or closures to refer to the object.
 -->