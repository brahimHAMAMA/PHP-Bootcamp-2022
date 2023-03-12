<?php

$nums = [10, 100, -20, 50, 30];
$min = $nums[0];
for ($i = 1; $i < count($nums); $i++) :
    $min = ($min > $nums[$i]) ? $nums[$i] : $min;
endfor;
echo "Max = $min";
// Output
//100