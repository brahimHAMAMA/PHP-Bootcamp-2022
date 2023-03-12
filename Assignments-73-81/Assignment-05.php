<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

// Output
var_dump(filter_var($url1, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
echo (filter_var($url1, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE) <> NULL) ? "A Valid URL" : "Not A Valid URL";
// "Not A Valid URL"

echo "<br>================<br>";
var_dump(filter_var($url2, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
echo (filter_var($url2, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE) <> NULL) ? "A Valid URL" : "Not A Valid URL";
// "Not A Valid URL"

echo "<br>================<br>";
var_dump(filter_var($url3, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
echo (filter_var($url3, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE) <> NULL) ? "A Valid URL" : "Not A Valid URL";
// "A Valid URL"

echo "<br>================<br>";
var_dump(filter_var($url4, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
echo (filter_var($url4, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE) <> NULL) ? "A Valid URL" : "Not A Valid URL";
// "Not A Valid URL"