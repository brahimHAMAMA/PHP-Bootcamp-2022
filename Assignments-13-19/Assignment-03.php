<?php


$a = 200;
$b = 100;
$b = &$a; // 200
$a = &$b; // 


echo $a . '<br>'; // 100
echo $b . '<br>'; // 200