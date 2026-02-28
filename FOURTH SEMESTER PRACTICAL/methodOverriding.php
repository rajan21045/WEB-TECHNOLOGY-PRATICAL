<?php
class A{
    function show(){
        echo "Parent";
    }
}
class B extends A{
    function show(){
        echo "Child overrides parent method. It is an example of method overriding in PHP.";
    }
}
$obj=new B();
$obj->show();
?>