<!--
Write PHP script to calculate the monthly electricity bill according to these rules
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit

-->

<?php

$electricityBill = 250;

    if ($electricityBill <= 50) 
    {
        echo $electricityBill * 2.5 ." JOD";
    } 
    elseif ($electricityBill <= 150) 
    {
        echo (50 * 2.5 + ($electricityBill - 50) * 5) ." JOD";
    } 
    elseif ($electricityBill <= 250) 
    {
        echo (50 * 2.5 + 100 * 5 + ($electricityBill - 150) * 6.2) ." JOD";
    }
     else 
    {
        echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($electricityBill - 250) * 7.5) ." JOD";
    }

?>