<!--
Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’

Range	Grade
 <60	   F
 <70	   D
 <80	   C
 <90	   B
 <100      A
-->


<?php

$Mark = [60,86,95,63,55,74,79,62,50];
for($i=0 ; $i< count($Mark); $i++)
{
    echo  $Mark[$i] ." , " ;
}

$average = array_sum($Mark) / count ($Mark);

echo "Salma's average mark is ".$average;

if ($average <100 && $average >90)
{
    echo "Her garde is A";
}

if ($average <90 && $average >80)
{
    echo "Her garde is B";
}

if ($average <80 && $average >70)
{
    echo "Her garde is C";
}

if ($average <70 && $average >60)
{
    echo "Her garde is D";
}

if ($average <60)
{
    echo "Your garde is F";
}

?>