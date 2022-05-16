<?php

setcookie("user","Saja",time()+(86400*30),"/");
echo $_COOKIE["user"]."<br>";
echo isset($_COOKIE["user"]);

?>

<!-- $_COOKIE superglobal variable is used to retrieve a cookie value -->
<!--  It typically an associative array that contains a list of all the cookies values -->