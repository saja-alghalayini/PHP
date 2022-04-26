<!--
Create a script to generate the following pattern, using the nested for loop. 
Expected Output:

1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5
-->


<?php

for ($i=0; $i < 5  ; $i++) 
{ 

    for ($x=0; $x < 5 ; $x++) 
    { 
        
        
        if($i == 1 && $x>=3)
        {
            echo 2;
        }
        elseif($i == 2 && $x>=2)
        {
            echo 3;
        }
        elseif($i == 3 && $x>=1)
        {
            echo 4;
        }
        elseif($i == 4 )
        {
            echo 5;
        }
        else
        {
            echo 1;
        }
    }
}

?>

