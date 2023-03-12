<?php
// Write Function Content Here

$str = "<div><b>Elzero</b></div>";


echo strtr($str, ["<div>" => "", "</div>" => ""]);
// <b>Elzero</b>

echo "<br>================<br>";

// <b>Elzero</b>
echo strip_tags($str, "<b>");
