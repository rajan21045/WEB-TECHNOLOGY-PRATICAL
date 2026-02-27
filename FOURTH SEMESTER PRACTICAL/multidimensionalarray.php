<?php
$students = array(
    array("Ram",20),
    array("Shyam",22),
    array("Sita",19),
    array("Gita",21),
    array("Hari",23)
);

foreach($students as $row){
    foreach($row as $value){
        echo $value." ";
    }
    echo "<br>";
}
?>