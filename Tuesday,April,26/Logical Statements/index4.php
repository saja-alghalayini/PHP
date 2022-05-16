<!-- 
Write PHP to check if the sum of the two given numbers equals 30
, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’
-->

<!--  var_dump() function is a built-in function of PHP 
that dumps the information about the variables -->

<?php
function test($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}
var_dump( test(20, 30));
var_dump(test(10, 10));  
?>