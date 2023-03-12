<?php

function change_permissions($nameFile)
{
    $bool = is_dir($nameFile);
    if ($bool == true) : // is_dir($nameFile)) :
        echo "This Is Directory And Only Files Allowed. <br>";
    else :
        if (pathinfo($nameFile)["extension"] <> "txt") :
            echo "File Extension Is Not txt. <br>";
        else :
            echo fileperms($nameFile);
            chmod($nameFile, 0700);
            clearstatcache();
            echo fileperms($nameFile);
            if (fileperms($nameFile) == "33206") echo "Permissions Changed. <br>";
        endif;
    endif;
}
// 0777 => 33206.
// 0700 => .

//Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed