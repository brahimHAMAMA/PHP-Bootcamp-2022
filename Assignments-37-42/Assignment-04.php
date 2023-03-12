<?php

$start = 10;
$end = 0;
$stop = 3;

for (; $start > $end; $start--) {
    echo ($start < 10) ? "0$start <br>" : "$start <br>";
    if ($start == $stop) break;
}
