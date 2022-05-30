

<?php

     include_once 'conection.php';
    echo $dbServername ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $emp_name= $_POST['emp_name'] ;
    $position=$_POST['position'];
    $salary=$_POST['salary'];

    $sql= " INSERT INTO nurse (emp_name, position, salary )
    VALUES ('$emp_name','$position','$salary'); ";


    if(mysqli_query($connect , $sql))
    {
        echo 'new record created sucessfuly ';
    }


    else
    {
        echo "error:".$sql."<br>".mysqli_error($connect);
    }
    
    mysqli_close($connect);
    
    ?>

</body>
</html>