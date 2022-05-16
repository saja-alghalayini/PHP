<!-- 
Write a PHP script to: 
a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized.
-->

<!-- chr() method:to convert a string to upper case characters -->

<?php

echo(strtoupper("hello world!"))

."<br>";

echo(strtolower("hello world!"))

."<br>";

echo(ucfirst("hello world!"))

."<br>";

echo(ucwords("hello world!"))

."<br>";
?>