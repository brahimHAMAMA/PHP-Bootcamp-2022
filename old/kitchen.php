<?php

$var = true;


// Validate e-mail
if (filter_var($var, FILTER_VALIDATE_BOOL)) {
    echo("$var is a valid value.");
} else {
    echo("$var is not a valid value.");
}
