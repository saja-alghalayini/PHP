<!-- 
Write a PHP script to sort the following associative array depending on the key value [asc] : 
Sample Input: 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:
c = apple
b = banana
d = lemon
a = orange
 -->

 <?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);
foreach ($fruits as $key => $val)
{
     echo "   " .$val . "\n <br>";
}

?>
