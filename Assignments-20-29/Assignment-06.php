<?php

$a = "Elzero";
$b = "Web";
$c = "School";

echo "<br>=======Method One========<br>";
$d = "$a $b $c";
echo $d;
echo "<br>=======Method Tow========<br>";
$d = $a . ' ' . $b . ' ' . $c;
echo $d;

echo "<br>=======Method Three========<br>";
$d = "{$a} {$b} {$c}";
echo $d;

echo "<br>=======Method Four========<br>";
$d = $a . ' ';
$d .= $b . ' ';
$d .= $c;

echo $d;
