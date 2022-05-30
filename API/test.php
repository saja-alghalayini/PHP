<?php

header("Content-Type:application/json");
include('configration/connection.php');

    $query = "SELECT * FROM `employees` WHERE emp_id=1";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $emplyeeData['emp_id'] = $row['emp_id'];
    $emplyeeData['emp_name'] = $row['emp_name'];
    $emplyeeData['emp_img'] = $row['emp_img'];
    $emplyeeData['emp_email'] = $row['emp_email'];
    $emplyeeData['emp_salary'] = $row['emp_salary'];

    $response["status"] = "true";
    $response["message"] = "emplyeeData";
    $response["employees"] = $emplyeeData;

echo json_encode($response); exit;

?>