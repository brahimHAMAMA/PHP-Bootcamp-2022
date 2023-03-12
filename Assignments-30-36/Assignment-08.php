<?php
$day = "Sat";

echo ($day == "Sat" or $day == "Sun" or $day == "Mon") ? "We Are Open All The Day" : (($day == "Tue" or $day == "Wed") ? "We Are Open From 08:00" : (($day == "Thu" or $day == "Fri") ? "We Are Closed" : "Unknown Day"));
