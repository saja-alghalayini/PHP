<!-- 
Write a PHP script to check whether the sentence contains a specific word.
Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’
 -->


 <?php
$str1 = 'the apple and the orange fought';
if (strpos($str1,'orange') !== false) 
 {
    echo 'The specific word is here.';
 }
else
 {
    echo 'The specific word is not here.';
 }
?>