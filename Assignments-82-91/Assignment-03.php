<?php

if (!is_dir("Programming")) :
    mkdir("Programming");
    echo "The Folder Programming created...";
else :
    echo "The Folder Programming is exeste <br>";
    chdir("Programming");
    if (!is_dir("PHP")) :
        mkdir("PHP");
        echo "The Folder PHP created...";
    else :
        echo "The Folder PHP is exeste";
    endif;
endif;

echo "<br>=========================<br>";
if (is_dir("Programming/PHP")) :
    chmod("Programming/PHP", 0711);
    echo "The Folder Programming/PHP Chande Permission...";
else :
    echo "The Folder Programming is Not exeste <br>";
endif;


echo "<br>=========================<br>";
if (is_dir("Programming")) :
    rmdir("Programming");
    echo "The Folder Programming/PHP Removed...";
else :
    echo "The Folder Programming is Not exeste <br>";
endif;

// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"