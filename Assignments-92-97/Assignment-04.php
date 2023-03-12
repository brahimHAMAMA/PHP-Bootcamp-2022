<?php

$date = "1990-10-01";

date_default_timezone_set("Africa/cairo");
echo date_default_timezone_get() . "<br>";

$datecreate = date_create($date);
echo date_format($datecreate, "Y-m-d H:i:s") . "<br>";

$datenow = date_create();
echo date_format($datenow, "Y-m-d Y-m-d H:i:s") . "<br>";

$numDay = date_diff($datenow, $datecreate);
$day = $numDay->format("%a");

echo "From Epoch Time Till " . date_format($datecreate, "Y-m-d") . " Is Approximately {$day} Days <br>";
echo "From Epoch Time Till " . date_format($datecreate, "Y-m-d") . " Is Approximately " . round($day / 356, 0) . " Years";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"