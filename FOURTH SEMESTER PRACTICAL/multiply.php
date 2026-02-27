<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $num=$_POST['num1'];

// for
echo "Using for loop:<br>";
for($i=1;$i<=10;$i++){
    echo "$num x $i = ".($num*$i)."<br>";
}

// while
echo "<br>";
echo "Using while loop:<br>";
$i=1;
while($i<=10){
    echo "$num x $i = ".($num*$i)."<br>";
    $i++;
}
echo "<br>";
// do while
echo "Using do while loop:<br>";
$i=1;
do{
    echo "$num x $i = ".($num*$i)."<br>";
    $i++;
}while($i<=10);
}
echo "<br><br><br><br><br><br><br><br><br><br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <button type="submit">Multiply</button>
    </form>
</body>
</html>