<!-- 
Write a PHP function to remove duplicates from an array?
Sample Input:  
$array1 = array(2, 4, 7, 4, 8, 4);
Expected Output:
$array1 = array(2, 4, 7, 8);
-->

<!--  array_unique() function. This function will remove the duplicate values from the array
      Syntax: 
      array array_unique($array, $sort_flags)
-->
<!--print_r: It is a built-in function in print_r in PHP that is used to print or display the contents of a variable. -->

<?php
$array1 = array("2", "4", "7", "4", "8", "4");
echo "<pre>"; print_r(array_unique($array1));echo "</pre>"
?>