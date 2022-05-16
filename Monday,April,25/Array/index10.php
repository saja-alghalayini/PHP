<!-- 
Write a PHP function to change the following array's and convert all the strings to lower case. 
Sample Input:
$colors = array("RED","BLUE", "WHITE","YELLOW");

Expected Output :
Array
(
    red
    blue
    white
    yellow
)
 -->

 <?php

$colors = array("RED","BLUE", "WHITE","YELLOW");
$colors = array_map('strtolower',$colors);
print_r($colors);
?>