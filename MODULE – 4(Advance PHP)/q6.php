<!-- What are the differences between abstract classes and interfaces?  -->

<!-- 
In PHP, the differences between abstract classes and interfaces are similar to those in other object-oriented programming languages. Here's how they differ in PHP specifically:

Definition:

Abstract Class: In PHP, an abstract class is declared using the abstract keyword. It can contain both abstract methods (methods without implementation) and concrete methods (methods with implementation). Abstract classes can also have properties, constructors, and method implementations.
Interface: Interfaces in PHP are declared using the interface keyword. They only contain method signatures (methods without implementation) and constants. Interfaces cannot have properties, constructors, or method implementations.
Instantiation:

Abstract Class: Abstract classes cannot be instantiated directly in PHP. You need to extend an abstract class and provide implementations for all its abstract methods before you can instantiate the subclass.
Interface: Interfaces cannot be instantiated at all in PHP. They only define method signatures that must be implemented by classes that implement the interface.
Inheritance:

Abstract Class: PHP supports single inheritance, so a class can extend only one abstract class. This means that a subclass can inherit both abstract and concrete methods from its abstract superclass.
Interface: PHP supports multiple interface inheritance. A class can implement multiple interfaces, allowing it to fulfill the contracts defined by each interface.
Method Implementation:

Abstract Class: Abstract classes in PHP can have abstract methods (without implementation) as well as concrete methods (with implementation). Subclasses must provide implementations for all abstract methods but can optionally override concrete methods.
Interface: Interfaces in PHP only define method signatures without implementation. Classes implementing an interface must provide implementations for all methods declared in the interface.
Access Modifiers:

Abstract Class: Abstract class methods in PHP can have various access modifiers (public, protected, or private) depending on the desired encapsulation.
Interface: All methods declared in an interface are implicitly public in PHP and cannot have any other access modifier.
Use Cases:

Abstract Class: Abstract classes in PHP are useful when you want to provide a common base implementation for multiple related classes. They are suitable for creating class hierarchies where some methods are shared among subclasses but others must be implemented by each subclass differently.
Interface: Interfaces in PHP are suitable for defining contracts that enforce a specific behavior across unrelated classes. They allow for achieving polymorphism and multiple inheritance through interface implementation.
 -->