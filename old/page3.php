<?php
session_start();
echo "Hello " . $_SESSION['username'] . " Now in page 3 <br />";

echo "<a href='kitchen.php'> Go to kitchen </a>";