<!--
Write a PHP script to check if the all string characters are lower cases
Sample Input:  remove
Expected Output: Your String is Ok 
 -->


<?php
$str = array('SAja-z', 'saj');

   foreach ($str as $i) 
   {
      if (ctype_lower($i)) 
      {
         echo "$i all lowercase letters. \n";
      }
      else 
      {
         echo "$i does not have all lowercase letters. \n";
      }
   }
?>
