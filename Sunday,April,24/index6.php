<?php
$url = 'https://www.w3schools.com/php/default.asp.';
$url=parse_url($url);
echo '<br>Scheme : '.$url['scheme']."\n";
echo '<br>Host : '.$url['host']."\n";
echo '<br> Path : '.$url['path']."\n";
?>