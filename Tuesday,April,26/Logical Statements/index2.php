<!-- 
Write a PHP script to check the season depending on the 
inserted temperature if the temperature is below 20, we 
are in winter otherwise the season is summer.

Sample Input: 27
Sample Output: ‘It is summertime!’
 -->

 <?php

function season($temperature)
{
   if ($temperature < 20)
      echo "It is a springtime!";
   else 
   {
       echo "It is a summertime!";
   }
}
$temperature = 27;

echo "the temperature for today is ". $temperature ."that means : " ;
season($temperature);

?>