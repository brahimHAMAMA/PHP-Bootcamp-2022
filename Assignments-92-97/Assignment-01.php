<?php

// Output Needed

// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"

echo date_default_timezone_get() . "<br>";
date_default_timezone_set("Africa/Algiers");
echo date_default_timezone_get() . "<br>";

echo "<br>========date_format()================<br>";
$date = date_create();
echo date_format($date, "D, d M y - h:i:s A")  . "<br>";
echo date_format($date, "l, d F Y - h:i:s A")  . "<br>";

echo "<br>========date()================<br>";
echo date("D, d M y - h:i:s A")  . "<br>";
echo date("l, d F Y - h:i:s A")  . "<br>";
