<?php
$nums = [5, 10, 20, 5, 30, 40];

function sum($num1, $num2)
{
    if ($num1 <> 5 || $num2 <> 5) :
        return $num1 + $num2;
    endif;
}

echo array_reduce($nums, "sum", -10) . "<br>";


// Output
// 100