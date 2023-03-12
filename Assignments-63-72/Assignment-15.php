<?php

$chars = ["o", "r", "e", "z", "l", "E"];

$name = "";
for ($i = count($chars) - 1; $i >= 0; $i--) :
    $name .= $chars[$i];
endfor;
echo "$name";

// Output
//"Elzero"