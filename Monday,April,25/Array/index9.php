<!-- 
Write a PHP function to change the following array's and convert all the strings to upper case. 
Sample Input:
$colors = array("red","blue", "white","yellow");
Expected Output :
Array
(
 RED
 BLUE
 WHITE
 YELLOW
)
 -->

<?php
$colors = array("red","blue", "white","yellow");
$colors =array_flip($colors);
$colors =array_change_key_case($colors, CASE_UPPER);
$colors =array_flip($colors);
print_r($colors)
?>