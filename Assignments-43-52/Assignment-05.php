<?php
function check_status($a, $b, $c)
{
    // Function Code Here
    if (is_string($a)) :
        $name = $a;
        if (is_integer($b)) :
            $age = $b;
            $available = $c;
        else :
            $available = $b;
            $age = $c;
        endif;
    elseif (is_integer($a)) :
        $age = $a;
        if (is_string($b)) :
            $name = $b;
            $available = $c;
        else :
            $available = $b;
            $name = $c;
        endif;
    else :
        $available = $a;
        if (is_integer($b)) :
            $age = $b;
            $name = $c;
        else :
            $name = $b;
            $age = $c;
        endif;
    endif;
    return "Hello $name, Your Age Is $age, You Are " . (($available) ? "Available" : "Not Available") .  " For Hire. <br>";
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"