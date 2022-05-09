
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Task 3 </title>
</head>
<body>
    
<h2>Days of the Week</h2>
 
<form method="post">
Please enter a day of the week:

<br>
<br>

<input type="text" name="day">
<input type="submit" name="submit" value="Click" />
</form>

</body>
</html> 



<?php

if (isset($_POST['submit']))
{

$day = $_POST["day"];

if ($day == 'Monday')

{
  echo "<br>Laugh on Monday, laugh for danger.";
} 

elseif($day == 'Tuesday')
{
  echo "<br>Laugh on Tuesday, kiss a stranger.";
} 

elseif ($day == 'Wednesday')
{
  echo "<br>Laugh on Wednesday, laugh for a letter.";
} 

elseif ($day == 'Thursday')
{
  echo "<br>Laugh on Thursday, something better.";
} 

elseif ($day == 'Friday')
{
  echo "<br>Laugh on Friday, laugh for sorrow.";
} 

elseif ($day == 'Saturday')
{
  echo "<br>Laugh on Saturday, joy tomorrow.";
}

else 
{
  echo "<br> No information for that day.";
}
 
}

?>

