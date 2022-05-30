<?php
    $dbname = $_POST["database"]
    $host = "localhost";
    $root = "root";
    $root_password = "";


    $user = 'root';
    $pass = '';
    $db = "Taebah&Saja";

    try 
    {
        $dbh = new PDO("mysql:host=$host", $root, $root_password);

        $dbh->exec("CREATE DATABASE `$dbname`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$dbname`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;")
        or die(print_r($dbh->errorInfo(), true));
    }


    catch (PDOException $e) 
    {
        die("DB ERROR: " . $e->getMessage());
    }

    
?>