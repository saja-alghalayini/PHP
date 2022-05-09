<!--
Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers.
Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …
-->

<!-- fNum :first num, where to start counting -->
<!-- sNum :second num -->
<!-- totNum :total Fibonacci series number count -->

<?php
    $fNum = 0;
    $sNum = 1;
    $totNum = 50;
    echo $fNum;
    echo '<br/>';
    echo $sNum;
    for($i = 1; $i <= $totNum; $i++) 
    {
        $f3 = $fNum + $sNum;
        $fNum = $sNum;
        $sNum = $f3;
        echo $f3 ."<br />"; 
    }
?>
