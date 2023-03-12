<?php

$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";

echo "<br>========date()================<br>";
$dateNew = date("Y, F, l 'dS' H:i:s", strtotime("+15 hours 15 minutes +15 seconds", strtotime($date)));
echo $dateNew;


echo "<br>========date_add()================<br>";

$datecreated = date_create($date);
$date1 = date_add($datecreated, date_interval_create_from_date_string("+15 hours 15 minutes +15 seconds"));

echo date_format($date1, "Y, F, l 'dS' H:i:s");

echo "<br>========date_modify()================<br>";
$datecreated1 = date_create($date);

$date2 = date_modify($datecreated1, "+15 hours 15 minutes +15 seconds");

echo date_format($date2, "Y, F, l 'dS' H:i:s");


// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"