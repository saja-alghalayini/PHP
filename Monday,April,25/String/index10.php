<!-- 
Write a PHP script to put a string in an array, use the (var_dump) to view the array. 
Sample Output: "Twinkle, twinkle, little star."
Expected Result: array (4) {[0] => string (30) "Twinkle, " [1] => string (26) " twinkle," [2] => string (27) twinkle" [3] => string (26) " little star.”}
-->


<?php
$str = ["Twinkle", "twinkle", "little star"];
var_dump($str);
?>