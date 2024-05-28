
<!-- 

What Is Overloading?

In PHP, overloading refers to the ability to define methods or functions in a class that can behave differently based on the number or type of parameters passed to them. 

Method Overloading: Method overloading allows you to define multiple methods in a class with the same name but with different parameters. PHP does not support method overloading in the traditional sense (as in some other languages like Java), where you can define multiple methods with the same name but different parameter lists. However, you can achieve similar behavior using the __call() magic method. When you attempt to call a method that doesn't exist or is inaccessible in the current scope, PHP will invoke the __call() method, allowing you to handle the method call dynamically.


-->

<?php

class Math {
    function sum($num1=null, $num2=null, $num3=null){
        if($num1!=null && $num2!=null && $num3!=null){
            return $num1 + $num2 + $num3;
        } else if($num1!=null && $num2!=null){
            return $num1 + $num2;
        } else {
            return "Invalid input";
        }
    }
}

$obj = new Math();
echo $obj->sum(10, 20);

?>
