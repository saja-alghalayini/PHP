
<?php

if(isset($_POST["submit"]))
{
$day = $_POST["day"];

if ($day == "Monday") 
{
    echo "<br>Laugh on Monday, laugh for danger.";
} 

else if($day == "Tuesday") 
{
    echo "<br>Laugh on Tuesday, kiss a stranger.";
}

else if($day == "Wednesday") 
{
    echo "<br>Laugh on Wednesday, laugh for a letter.";
}

else if($day == "Thursday") 
{
    echo "<br>Laugh on Thursday, something better.";
}

else if ($day == "Friday") 
{
    
    echo "<br>Laugh on Friday, laugh for sorrow.";
}

else if($day == "Saturday") 
{
    echo "<br>Laugh on Saturday, joy tomorrow.";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <form  method="post">
        <label for="day">Pick a day </label>
        <input type="text" name="day" id="day">
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>
