<?php
$date = "1990-10-01";

$dateCreate = date_create($date);

$timeCreate = strtotime($date);
echo $timeCreate . "<br>";

$timenow = time();
echo $timenow . "<br>";


$timeDiff = $timenow - $timeCreate;

$days = $timeDiff / (60 * 60 * 24);
$years = $days / (30 * 12);
echo "From Epoch Time Till " . date_format($dateCreate, "Y-m-d") . " Is Approximately " . round($days, 1) . "  Days <br>";
echo "From Epoch Time Till " . date_format($dateCreate, "Y-m-d") . " Is Approximately " . round($years, 1) . " Years";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"