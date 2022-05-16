<!-- 
Write a PHP script to get the shortest/longest string length from an array. 
Sample Input:
$words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 
The shortest array length is 1. The longest array length is 4.
 -->

 <?php

$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);

echo "The shortest array length is ". min($new_array)

."<br>". 

" The longest array length is " . max($new_array).'.'; 
?>