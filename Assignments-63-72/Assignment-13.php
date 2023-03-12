<?php

$nums = [10, 100, -20, 50, 30];
$max = $nums[0];
for ($i = 1; $i < count($nums); $i++) :
    $max = ($max < $nums[$i]) ? $nums[$i] : $max;
endfor;
echo "Max = $max";
// Output
//100