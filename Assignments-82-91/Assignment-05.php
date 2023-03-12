<?php

echo basename(__FILE__) . "<br>";

$array = explode('\\', realpath(__FILE__));
echo end($array)  . "<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME) . "<br>";


// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"