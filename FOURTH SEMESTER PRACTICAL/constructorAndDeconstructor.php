<?php
class Demo{
    function __construct(){
        echo "Constructor Example<br>";
    }
    function __destruct(){
        echo "Destructor Example";
    }
}
$obj=new Demo();
?>