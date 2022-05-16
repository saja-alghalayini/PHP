<?php 
$dbServername"localhost";
$dbUsername="root";
$dbPassword="";
$dbName="mysqli";

$connect =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$connect)
{
    die("Connection Failed: " .mysqli_connect_error());
}
echo "Connected Successfully";
?>
