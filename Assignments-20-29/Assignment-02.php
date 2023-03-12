<?php

use function PHPSTORM_META\type;

$a = "10";


echo "====== Methode 01=========<br>";
echo +$a . '<br>';
echo gettype(+$a);

echo "<br>====== Methode 02=========<br>";
echo (int)$a . '<br>';
echo gettype((int)$a);

echo "<br>====== Methode 03=========<br>";
echo intval($a) . '<br>';
echo gettype(intval($a));

// For The People Who Love Searching
echo "<br>====== Methode 04=========<br>";
echo json_decode($a) . '<br>';
echo gettype(json_decode($a));

echo "<br>====== Methode 05=========<br>";

$onlyNumeric = filter_var($a, FILTER_SANITIZE_NUMBER_INT);
settype($onlyNumeric, "integer");
$intVal = $onlyNumeric;
echo $intVal . '<br>';
echo gettype($intVal);
