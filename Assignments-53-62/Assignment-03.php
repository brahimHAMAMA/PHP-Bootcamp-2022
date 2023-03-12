<?php

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

echo str_repeat(chunk_split(strtolower($str), 3, $char), $num);
// aaa_aaa_aaa_