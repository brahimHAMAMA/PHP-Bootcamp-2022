<?php
// Write Function Content Here
function calculate($a, $b, $operation = "add")
{
    if ($operation == "add" || $operation == "a") :
        return $a + $b;
    elseif ($operation == "subtract" || $operation == "s") :
        return $a - $b;
    else :
        return $a * $b;
    endif;
}
// Needed Output
echo calculate(10, 20) . "<br>"; // 30
echo calculate(10, 20, "a") . "<br>"; // 30
echo calculate(10, 20, "s") . "<br>"; // -10
echo calculate(10, 20, "subtract") . "<br>"; // -10
echo calculate(10, 20, "multiply") . "<br>"; // 200
echo calculate(10, 20, "m") . "<br>"; // 200