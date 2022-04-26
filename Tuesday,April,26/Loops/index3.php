<!-- 
Create a script to generate the following pattern, using the nested for loop. 
Expected Output:

A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
-->

<?php

$x='A';
for($i=1; $i<=5; $i++)
{
    for($j=5-$i; $j>0; $j--)
    echo 'A';


    for($b=1; $b<=$i;$b++)
    echo "$x";
     
        $x++;
}

?>