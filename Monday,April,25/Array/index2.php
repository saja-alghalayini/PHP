<!-- 
$colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list :
Expected Output:  
•green
•red
•white
-->

<?php
$colors = array('white', 'green', 'red');

sort($colors);
echo "<ul>";
foreach ($colors as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>