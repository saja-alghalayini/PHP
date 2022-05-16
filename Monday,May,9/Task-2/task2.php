



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Task 2 </title>
</head>
<body>
    
<h2>Favorite City</h2>
<form method="post" >

Please enter your favorite city:  

<br>
<br>

<input type="text" name="city">
<input type="submit" name="submit" value="Click">
</form>

</body>
</html> 


<?php

if (isset($_POST['submit']))
{
   $city = $_POST['city'];
   echo "<h3>Your favorite city is $city.</h3>";
}



?>