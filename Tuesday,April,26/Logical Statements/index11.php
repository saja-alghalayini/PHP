<!--
Write php script  to check whether a number is positive, negative or zero
Sample Input: -60
Sample Output: ‘Negative’
-->

<?php

$number =-60;
echo $number;

if($number > 0)
{
    echo ", Positive";
    }
    elseif ($number < 0 )
    {
        echo ", Negative";
    }
    else 
    {
        echo " the number is zero ";
    }

?>