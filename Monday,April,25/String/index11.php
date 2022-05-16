<!-- 
Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a'
 -->


 <?php

$char = 'a';
$nextChara = ++$char; 
if (strlen($nextChara) > 1) 
{ 
 $nextChara = $nextChara[0];
 
}

echo $nextChara;

echo "<br>";

$char = 'z';
$nextChara = ++$char; 
if (strlen($nextChara) > 1) 
{ 
 $nextChara = $nextChara[0];
}
echo $nextChara
?>