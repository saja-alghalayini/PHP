<!--
Create a script to generate the following pattern, using the nested for loop. 
Espected Output:

1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
-->

<?php

for($i=1; $i <=5; $i++)
{
    for( $s=1; $s <=5; $s++)
    {
         if($s==$i)
        {
            echo $i;
        }
         else
        {
            echo 0;
    
    }
    
    }
}
?>