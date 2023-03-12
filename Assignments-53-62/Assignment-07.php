<?php

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];


echo preg_replace('/\d+/', '', ucfirst(strtolower(implode($chars)))) . "<br>";

// Output
//"Elzero"