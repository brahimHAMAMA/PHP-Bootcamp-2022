<?php

if (isset($_COOKIE['background'])) :
    echo "<style> body{background-color:" . $_COOKIE['background'] . "}</style>";
endif;


if ($_SERVER["REQUEST_METHOD"] == "POST") :
    setcookie('background', $_POST["bg-color"], strtotime("+1 year"));

    header("Location:" . $_SERVER["REQUEST_URI"]);
    exit();
endif;
?>

<form action="" method="POST">
    <input type="color" name="bg-color">
    <input type="submit" value="Change">
</form>