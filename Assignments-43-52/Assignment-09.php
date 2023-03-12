<?php

// Write Function Content Here
$greet = function ($name) {
    return "Greetings $name";
};
// Needed Output
echo $greet("Osama"); // Greetings

echo "<br><br>=========Arraw Function Syntax==============<br>";
// Write Function Content Here
$greet1 = fn ($name) => "Greetings $name";
// Needed Output
echo $greet1("Osama"); // Greetings