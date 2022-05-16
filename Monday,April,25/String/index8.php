<!-- 
Write a PHP script to replace the first word of the sentence with another word.
Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius.
 -->


<?php

$string = 'That new trainee is so genius.';
echo preg_replace('/That/', 'The', $string, 1)."\n"; 
?>
