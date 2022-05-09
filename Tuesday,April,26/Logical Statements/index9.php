<!--
Write php script to make a calculator, the calculator should contain the four main operations 
e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division
-->


<?php

$integer1=5;
$integer2=10;

$addition = $integer1 + $integer2 ;

echo "   Addition : ".$integer1 ." + ".$integer2 ." = ". $addition ;  
$subtraction = $integer2-$integer1 ;

echo "  subtraction : ".$integer1  ." - ". $integer2 ." = ". $subtraction; 
$multiplication = $integer1 * $integer2 ;

echo "  multiplication : ".$integer1  ." * ". $integer2 ." = ". $multiplication ; 
$Division = $integer1 / $integer2 ; 

echo "  Division : ".$integer1  ." / ". $integer2 ." = ". $Division ; 

?>