<?php
// Code 1
//$a = @$b or die('Custom Error!. 1 ');

// // Code 2
// $f = @file("Not_A_File") or die("Custom Error!. 2");

// Code 3
@(include("Not_A_File")) or die("Custom Error!. 3");
