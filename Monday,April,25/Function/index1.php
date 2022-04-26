<!-- 1.	Write a PHP script to check if the inserted number is a prime number
Sample Input:  3
Expected Output: 3 is a prime number
 -->

<?php

function primeNum($number)
{
    if ($number == 1)
    return 0;
    for ($x = 2; $x <= $number/2; $x++)
    {
        if ($number % $x == 0)
            return 0;
    }
    return 1;
}

$number = 10; // change the number here..
$flag = primeNum($number); // $flag: is used to set the flag to change the behavior of the ArrayObject
if ($flag == 1)
    echo "$number It is a prime number";
else
    echo "$number it is not a prime number";
?>
