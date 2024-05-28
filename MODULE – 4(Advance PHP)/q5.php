<!-- What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with 
Example  
-->

<!-- 

T_PAAMAYIM_NEKUDOTAYIM is a term used in PHP that refers to the scope resolution operator ::. This operator is used in PHP to access static properties and methods of a class, or to call a parent class's methods from within a child class.

The name T_PAAMAYIM_NEKUDOTAYIM itself is Hebrew and means "double colon." It's used in PHP's tokenizer and parser to represent the :: operator.
 -->

 <?php
class staticClass {
    public static $static_var = "This is a static var";

    public static function static_func() {
        echo "This is a static function";
    }
}

echo staticClass::$static_var.'<br>';
staticClass::static_func(); // Corrected function call syntax
?>
