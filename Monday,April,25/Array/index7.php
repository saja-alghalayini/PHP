<!-- 
Write a PHP script to calculate and display the average temperature for the recorded reads
, also the script should display the list of the five lowest and the five highest temperatures 
Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85,
 -->


<?php
$avrgTemp ="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
            68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$tempArray = explode(',', $avrgTemp);
$totalTemp = 0;
$tempArrayLength = count($tempArray);
foreach($tempArray as $temp)
{
 $totalTemp += $temp;
}
 $avgHighTemp = $totalTemp/$tempArrayLength;
 echo "Average Temperature is: ".$avgHighTemp." <br>"; 
sort($tempArray);
echo " List of seven lowest temperatures:";
for ($i=0; $i< 7; $i++)
{ 
echo $tempArray[$i].", ";
}
echo "<br> List of seven highest temperatures:";
for ($i=($tempArrayLength-7); $i< ($tempArrayLength); $i++)
{
echo $tempArray[$i].", ";
}
?>
