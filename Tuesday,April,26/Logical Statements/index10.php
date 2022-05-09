<!--
Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
Sample Input: 15
Sample Output: ‘is no eligible to vote’
-->

<?php

$age = 15;
echo "your age is ". $age;

if($age > 18)
{
    echo "  You can vote";
}

else
{
    echo "  you can't vote";
}

?>