<?php

$chars = ["A", "B", "C"];

// Output
array_push($chars, "D");

echo "<pre>";
print_r($chars);
echo "<pre>";

echo "<br>==========<br>";
$chars = ["A", "B", "C"];
$chars[] = "D";
echo "<pre>";
print_r($chars);
echo "<pre>";


echo "<br>=====Merge=====<br>";
$chars = ["A", "B", "C"];
$chars = array_merge($chars, ["D"]);
echo "<pre>";
print_r($chars);
echo "<pre>";

echo "<br>=====array_splice=====<br>";
$chars = ["A", "B", "C"];

echo "<pre>";
print_r(array_splice($chars, 3, 0, "D"));
echo "<pre>";

echo "<pre>";
print_r($chars);
echo "<pre>";

// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )