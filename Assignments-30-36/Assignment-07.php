<?php

$num_one = 23;
$num_two = 5;
$op = "d";

switch ($op):
    case ('+'):
        echo "$num_one $op $num_two = " . $num_one + $num_two;
        break;
    case ('-'):
        echo "$num_one $op $num_two = " . $num_one - $num_two;
        break;
    case ('*'):
        echo "$num_one $op $num_two = " . $num_one * $num_two;
        break;
    case ('/'):
        echo "$num_one $op $num_two = " . (int)($num_one / $num_two) . "<br>";
        echo "Modul $num_one $op $num_two = " . $num_one % $num_two;

        break;
    default:
        echo "Unknown Operation";
        break;
endswitch;
