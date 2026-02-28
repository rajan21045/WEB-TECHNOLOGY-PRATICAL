<?php
class ParentClass{
    function show(){
        echo "Parent. It is a parent class. It is inherited by child class. It is a base class. <br>
        It is the example of inheritance in PHP. It is a fundamental OOP concept. It allows us to create a new class that is based on an existing class. <br> The new class inherits the properties and methods of the existing class. The new class can also have its own properties and methods.<br> Inheritance promotes code reusability and establishes a natural hierarchical relationship between classes.";
    }
}
class Child extends ParentClass{}
$obj=new Child();
$obj->show();
?>