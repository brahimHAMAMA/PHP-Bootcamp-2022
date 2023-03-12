<?php

session_start();

echo $_SESSION['name'];

session_unset();
session_destroy();
