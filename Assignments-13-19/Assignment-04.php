<?php

echo __DIR__ . "<br>";
echo $_SERVER["HTTP_HOST"] . "<br>";

//echo DEFAULT_INCLUDE_PATH . "\..<br>"; // "C:/xampp/htdocs"

//echo __DIR__; // "localhost"
echo $_SERVER["SystemRoot"] . "<br>"; // "C:\WINDOWS"

// "C:/xampp/apache/bin/openssl.cnf"
phpinfo();

echo $_SERVER["openSSL"] . "<br>"; // "C:\WINDOWS"