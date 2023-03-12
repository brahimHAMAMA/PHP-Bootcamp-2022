<?php
session_start();

echo "Hello "  . $_SESSION['username'] . "<br />";
echo "Your favourit food is " . $_SESSION["favfood"] . "<br />";

echo '<a href="page3.php"> Go to page 3 </a>';