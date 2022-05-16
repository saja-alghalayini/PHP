<!--
Write a PHP program that repeats integers from 1 to 50.
For multiples of three, print "Fizz" instead of the number,
and for multiples of five print "Buzz". For numbers that are 
multiples of both three and five,print "FizzBuzz".

Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….
-->

<!-- PHP_EOL: This Predefined constant is used as a representation of the end of the line -->

<?php

for ($i = 1; $i <= 50; $i++)
{
    $isFizz = (0 === $i % 3);
    $isBuzz = (0 === $i % 5);

    if (!$isFizz && !$isBuzz)
    {
        echo $i . PHP_EOL;

        continue;
    }

    if ($isFizz) 
    {
        echo 'Fizz';
    }

    if ($isBuzz) 
    {
        echo 'Buzz';
    }

    echo PHP_EOL;
}

?>