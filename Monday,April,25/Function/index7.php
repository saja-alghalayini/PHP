<!-- 
Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome
-->

<?php
function Palindrome($string)
{   
if (strrev($string) == $string)
{   
    return 1;   
} 

else
{ 
    return 0; 
} 
}   
$check = "Saj";  

if(Palindrome($check))
{   
echo "it is a Palindrome";   
}  

else
{   
echo "it's Not a Palindrome";   
} 
?>