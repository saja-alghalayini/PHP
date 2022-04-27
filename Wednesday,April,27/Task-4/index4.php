<?php

if (isset($_POST['submit']))
{
    $newTask = $_POST['toDoList'];
   
    echo'<input type="checkbox" name="'. $newTask.'" id="'. $newTask.'">
    <label for="">'. $newTask.'</label>';
   }

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>To Do List</title>
</head>
<body>
<div class="count">

  <form action="" method="post">
  <input type="text" name="toDoList" placeholder="add a new to do list">
  <input type="submit" name="submit">
  </form>


</div>
</body>
</html>