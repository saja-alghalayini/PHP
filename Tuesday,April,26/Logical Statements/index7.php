<!-- 
Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9
-->

<?php

$array = array(1, 5, 9);
$largest = $array[0];
for ($i =0; $i < count($array); $i++)
{
    if($array[$i] > $largest)
    {
        $largest =$array[$i];
    }
    else
    {
        $largest =$array[0];
    }
}
echo $largest;

?>