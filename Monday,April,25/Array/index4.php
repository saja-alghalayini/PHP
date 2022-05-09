<!-- 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to display the first element of the above array. 
Expected Output:  white
 -->

 
<!-- The reset() function used to move the array's internal pointer to the first element. -->


<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
?>