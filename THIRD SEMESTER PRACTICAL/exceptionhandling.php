<?php
function divide($a, $b) {
    if($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    echo divide(10, 2);
    echo divide(10, 0);  // This will throw exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
