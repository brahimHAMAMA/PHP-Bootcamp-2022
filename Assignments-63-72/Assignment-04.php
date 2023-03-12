<?php
$nums = [10, 20, 30];

// Output
// function sum($num1, $num2)
// {
//     return $num1 + $num2;
// }
echo array_reduce($nums, fn ($num1, $num2) => $num1 + $num2, 0) . "<br>";
// 60
echo array_sum($nums);
// 60