<?php

$nums = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($nums); $i++) :
    $num1 = rand(0, count($nums) - 1);
    $num2 = rand(0, count($nums) - 1);

    while ($num1 == $num2) :
        $num2 = rand(0, count($nums) - 1);
    endwhile;
    $change = $nums[$num1];
    $nums[$num1] = $nums[$num2];
    $nums[$num2] = $change;

endfor;
echo "<pre>";
print_r($nums);
echo "<pre>";



// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )