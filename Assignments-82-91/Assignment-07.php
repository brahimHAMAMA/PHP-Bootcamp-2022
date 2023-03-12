<?php

// elzero1.txt Content
// Hello Osamaa Web
// School
$str = file_get_contents("elzero1.txt");

$str = str_replace("Osamaa", "Elzero", $str);

file_put_contents("elzero1.txt", $str);
echo file_get_contents("elzero1.txt");

// elzero1.txt New Content
// Hello Elzero Web
// School