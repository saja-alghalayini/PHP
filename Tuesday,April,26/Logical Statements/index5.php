<!-- 
Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’
-->

<?php

function checkNumber( $number)
{
    $oddNum = 0;
    $evenNum = 0;
 
    if($number < 0) $number = -$number;
    if($number == 0) return 1;
    if($number == 1) return 0;
 
    while($number)
    {
        
        if($number & 1)
        $oddNum++;
 
       
        if($number & 2)
            $evenNum++;
        $number = $number >> 2;
    }
 
    return checkNumber(abs($oddNum -$evenNum));
}

$num = 20;
if (checkNumber($num))
    echo $num, " is a multiple of 3";
else
    echo $num, " it is not a multiple of 3";

?>