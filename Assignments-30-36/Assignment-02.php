<?php

// Test Case 1
$a = 200;
$b = 200;
$c = 100;

// A Is Not Larger Than B Or C

if ($a > $b) {
    echo "A Is Larger Than B";
} elseif ($a > $c) {
    echo "A Is Larger Than C";
} else {
    echo "A Is Not Larger Than B Or C";
}
