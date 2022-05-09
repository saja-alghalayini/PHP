<!-- 
 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.
Sample Input:  407
Expected Output: 407 is Armstrong Number 
 -->

 <!-- An Armstrong number of three digits is an integer 
 so that the sum of the cubes of its digits is equal to 
 the number itself. For example, 153 is an Armstrong number 
 since 1**3 + 5**3 + 3**3 = 153 -->

 <!-- another example
  407 = (4*4*4) + (0*0*0) + (7*7*7)  
  = 64 + 0 + 343  
  407 = 407 
 -->

 <?php
 function armStrongNumber($num)
{
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) 
  {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) 
  {
    return "True_____";
  } 
  else
   {
    return "False";
  }
}
echo "Is 407 Armstrong number? ".armStrongNumber(407);
echo "\nIs 100 Armstrong number? ".armStrongNumber(100);

?>