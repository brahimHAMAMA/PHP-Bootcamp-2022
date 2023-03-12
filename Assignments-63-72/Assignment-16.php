<?php

$mix = ["A", "C", "B", 1, 100, 15, 2, 6, 7, 5];

function filter($v1)
{
    if (gettype($v1) === "integer") {
        if ($v1 % 2 <> 0) {
            echo $v1 . "<br>";

            return ($v1);
        }
    }
}

$mix = array_filter($mix, "filter");

sort($mix);

echo "<pre>";
print_r($mix);
echo "<pre>";


// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )