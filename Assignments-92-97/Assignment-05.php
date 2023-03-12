<?php

// With time() Function
echo time() . "<br>"; // 1668020233

// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233


echo "<br>======= 01 =========<br>";

date_default_timezone_set('UTC');
$now = new DateTime();
echo $now->getTimestamp();

echo "<br>======= 02 =========<br>";

$dateTime = new DateTime('');
echo $dateTime->format('U');

echo "<br>======= 03 =========<br>";
$date = date_create();
echo date_format($date, 'U');

echo "<br>======= 04 =========<br>";
$date = date_create();
echo date_timestamp_get($date);
