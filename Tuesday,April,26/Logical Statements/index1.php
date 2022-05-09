<!-- 
Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’
-->

<?php  
$chosenYear = 2032;  
 
if((0 == $chosenYear % 4) & (0 != $chosenYear % 100) | (0 == $chosenYear % 400))
{
echo "$chosenYear it is a Leap Year.";    
}
 
else  
{  
echo "$chosenYear it is not a Leap Year.";    
}
?> 