<?php

// Write Function Content Here
function greeting($name, $Ginder = "")
{
  return ($Ginder == "Male") ? "Hello Mr $name <br>" : (($Ginder == "Female") ? "Hello Miss $name <br>" : "Hello $name <br>");
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh