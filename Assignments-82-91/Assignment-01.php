<?php

echo round(disk_total_space('c:') / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte <br>";
echo round(disk_total_space('e:') / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte <br>";
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"