<?php
$num = 2;
while ($num < 520) {
    if ($num == 2 and !isset($test)) {
        $test = true;
        $num = 1;
    }
    $mynumbers = [1, 4, 10, 46, 94, 190, 382];
    if (in_array($num, $mynumbers)) {
        echo $num . "<br>";
        if ($num == 382) break;
    }
    $num++;
}
