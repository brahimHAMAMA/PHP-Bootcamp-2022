<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$numNumbers = 0;
$numLetters = 0;
for ($i = 0; $i < count($mix); $i++) {
    if (gettype($mix[$i]) == "integer") {
        echo " $mix[$i] <br>";
        $numNumbers++;
    } else {
        $numLetters++;
    };
}
echo "<br>====================================<br>";
echo "$numNumbers Numbers Printed.! <br>";
echo "$numLetters Letters Ignored.! <br>";
echo "====================================<br>";
