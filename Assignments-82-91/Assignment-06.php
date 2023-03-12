<?php

// elzero.txt Content

// Hello Elzero Web
// School
// No Need To Read


$filename = fopen("elzero.txt", "r");

$str = "Hello Elzero Web\r\nSchool";
$len = mb_strlen($str, "8bit");

echo "<br>======Method 01==========<br>";

echo fread($filename, $len);



echo "<br>======Method 02==========<br>";
rewind($filename);
echo fgets($filename) . fgets($filename);


echo "<br>======Method 03==========<br>";
rewind($filename);
$lines = [];

if (!$filename) {
    return;
}

while (!feof($filename)) {
    $lines[] = fgets($filename);
}
echo $lines[0] . $lines[1];

echo "<br>======Method 04==========<br>";

echo file_get_contents("elzero.txt", __FILE__, NULL, 0, $len);

fclose($filename);
