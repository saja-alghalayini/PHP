<!-- 
19.	Write a PHP script to print letters from 'a' to 'z'. 
Expected Output: a b c d e f g h I j k l m n o p q r s t u v w x y z 
-->
 
<!-- range: This function returns an array of elements from low to high -->

<?php
foreach (range('a', 'z') as $alphabet)
{
    echo $alphabet." ";
}
?>