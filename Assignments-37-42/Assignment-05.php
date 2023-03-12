<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for (; $start < count($mix); $start++) {
    if (gettype($mix[$start]) == "integer") {
        if ($mix[$start] != 1) echo " $mix[$start] <br>";
    };
}
