<?php

// require 'task2.php';

    $host = 'localhost';
    $dbName = "Taebah&Saja";
    $userName="root";
    $pass = '';

    try
    {  
        $dbConn= new PDO("mysql:host=$host;dbname=$dbName", $userName,$pass);  
        $sql = "INSERT INTO student (student_name,average , addressee) VALUES ('seleen','85','Amman');";
        $sql1= "DELETE FROM student WHERE id='2';";
        $sql2="UPDATE student SET average ='98' WHERE id='4';";
        $sql3="CREATE TABLE teachers(first_name TEXT(255) NOT NULL,last_name TEXT(255) NOT NULL,email VARCHAR(255) NOT NULL );";
        $sql4 = "INSERT INTO teachers (first_name,last_name,email) VALUES ('Saja','Ghalayini','saja@gmail.com');";
        $sql5="SELECT first_name,email FROM teachers
        INNER JOIN teachers ON student.student_name=teachers.first_name;";

        $dbConn->exec($sql);
        $dbConn->exec($sql1);
        $dbConn->exec($sql2);
        $dbConn->exec($sql3);
        $dbConn->exec($sql4);
        $dbConn->exec($sql5);

        Echo "Successfully connected with connection database";  
    } 
    catch(Exception $e)
    {  
    Echo "Connection failed" . $e->getMessage();  
    }  
?>




