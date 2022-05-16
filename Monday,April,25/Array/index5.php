<!-- 
Write a PHP script that inserts a specific new item in an array in any position.
Sample Input:
Array 1 2 3 4 5   
Location: 4
New Item: $

Expected Output: 1 2 3 $ 4 5
 -->

 <?php
 
$old = array( '1','2','3','4','5' );
foreach ($old as $x) 
$newItem = '$';
array_splice( $old, 3, 0, $newItem ); 
foreach ($old as $x) 
{echo "$x ";}

?>