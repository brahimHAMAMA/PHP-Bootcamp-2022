<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

echo ($age > 18 and gettype($name) === "string" and $country === "Egypt") ? "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>" : "";
// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"